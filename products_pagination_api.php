<?php
header('Content-Type: application/json');
include 'config.php';

error_reporting(E_ALL);
ini_set('display_errors', 2);

try {
    $page = isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0 ? (int)$_GET['page'] : 1;
    $limit = isset($_GET['limit']) && is_numeric($_GET['limit']) && $_GET['limit'] > 0 ? (int)$_GET['limit'] : 5;
    $offset = ($page - 1) * $limit;

    $total_items = 0;
    $total_pages = 0;
    $products = [];

    $count_query = "SELECT COUNT(*) as count FROM products";
    $count_result = $conn->query($count_query);

    if ($count_result) {
        $row = $count_result->fetch_assoc();
        $total_items = (int)$row['count'];
        $total_pages = $limit > 0 ? ceil($total_items / $limit) : 0;
    } else {
        throw new Exception("Count Query Error: " . $conn->error);
    }

    if ($total_items > 0 && $page <= $total_pages) {
        $product_query = "SELECT * FROM products ORDER BY id DESC LIMIT $limit OFFSET $offset";
        $result = $conn->query($product_query);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        } else {
            throw new Exception("Product Fetch Error: " . $conn->error);
        }
    }

    echo json_encode([
        "data" => $products,
        "current_page" => $page,
        "per_page" => $limit,
        "total_items" => $total_items,
        "total_pages" => $total_pages,
        "status" => $total_items > 0 ? "success" : "no_data"
    ], JSON_PRETTY_PRINT);

} catch (Exception $e) {
    echo json_encode([
        "error" => true,
        "message" => $e->getMessage()
    ], JSON_PRETTY_PRINT);
}
?>
