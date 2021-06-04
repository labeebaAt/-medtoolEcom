$query = "SELECT name FROM `product`";
if ($result = mysqli_query($link, $query)) {
    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
        $content[] = $row;	// push value to array
    }
}


