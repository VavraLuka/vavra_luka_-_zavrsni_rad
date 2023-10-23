<section id="orderHistory">
    <div class="section-wrapper">
        <hr>
        <div class="two-elements">
            <div class="single-element-left">
                <h2>Povijest narudžbi</h2>
            </div>
        </div>
        <?php
        include_once "php/databaseconnect.php";
        $sql = "SELECT * FROM orders";
        $result = mysqli_query($dbc, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='two-elements' style='margin: 0 0 20px 0'><div style='flex-basis: 40%;'><div class='user-table-div'>
                <table class='user-edit'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Korisnik</th>
                        <th>Email adresa</th>
                        <th>Datum</th>
                        <th style='text-align: right; padding-right: 0;'>Vrijeme</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['userName']} {$row['userSurname']}</td>
                    <td>{$row['userEmail']}</td>
                    <td>{$row['submit_date']}</td>
                    <td>{$row['submit_time']}</td>
                </tr>";
            echo "</tbody></table></div></div>";
            echo "<div style='flex-basis: 60%;'><div class='user-table-div'>
            <table class='user-edit'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Proizvođač</th>
                    <th>Proizvod</th>
                    <th>Cijena</th>
                    <th>Količina</th>
                    <th style='text-align: right; padding-right: 0;'>Ukupno</th>
                </tr>
            </thead>
            <tbody>";
            $products_IDs_array = array_map('trim', explode(",", $row['products_IDs']));
            $products_array = array_map('trim', explode(",", $row['products']));
            $products_manufacturers_array = array_map('trim', explode(",", $row['products_manufacturers']));
            $products_prices_array = array_map('trim', explode(",", $row['products_prices']));
            $products_total_prices_array = array_map('trim', explode(",", $row['products_total_prices']));
            $products_quantities_array = array_map('trim', explode(",", $row['products_quantities']));

            echo "<tr>";
            $columns = [
                $products_IDs_array,
                $products_manufacturers_array,
                $products_array,
                $products_prices_array,
                $products_quantities_array,
                $products_total_prices_array
            ];
            foreach ($columns as $column) {
                echo "<td>";
                foreach ($column as $value) {
                    if ($column === $products_prices_array || $column === $products_total_prices_array) {
                        $value = number_format($value, 2, '.', ',') . "€";
                    }
                    echo $value . "<br>";
                }
                echo "</td>";
            }
            echo "</tr>";
            $total_price = number_format($row['total_price'], 2, '.', ',');
            echo "</tbody>
            <tfoot>
                <tr>
                    <td colspan='5' class='total-label'>Cijena ukupno</td>
                    <td style='text-align: right;'>{$total_price}€</td>
                </tr>
            </tfoot>
            </table></div></div></div>";
        } ?>
    </div>
</section>