<div class="sideNavBar">
    <svg width="200" height="100" viewBox="0 0 1000 500" xmlns="http://www.w3.org/2000/svg">
        <text id="SPECTACLES" xml:space="preserve" x="500" y="452" text-anchor="middle" font-family="Tostada" font-size="129" fill="#638475">SPECTACLES</text>
        <path id="Glasses" fill="#638475" fill-rule="evenodd" stroke="none" d="M 975.662781 128.372101 C 975.662781 128.372101 952.988342 139.788635 941.651184 177.5 C 930.313965 215.211365 921.622131 340 775.37207 340 L 733.802307 340 C 645.55719 340 602.73291 311.528503 571.302307 241.744171 C 563.162231 223.665131 554.152832 203.197632 546.09967 184.725525 C 532.846436 154.338104 517.862549 147.267456 499.5 147.267456 C 481.137482 147.267456 466.153595 154.338104 452.90033 184.725525 C 444.847198 203.197632 435.837769 223.650024 427.697662 241.744171 C 396.26709 311.528503 353.44278 340 265.197662 340 L 223.627914 340 C 77.377861 340 68.686043 215.211365 57.348839 177.5 C 46.011627 139.788635 23.33721 128.372101 23.33721 128.372101 L 12 67.906982 C 78.321472 58.131897 145.253494 53.080414 212.290695 52.79071 C 315.081451 52.79071 388.690033 64.033447 437.855774 102.262512 C 437.855774 102.262512 460.386719 94.360474 499.5 94.360474 C 538.613281 94.360474 561.144226 102.262512 561.144226 102.262512 C 610.309937 64.033447 683.918579 52.79071 786.70929 52.79071 C 853.746521 53.080414 920.678528 58.131897 987 67.906982 Z M 352.116272 94.179047 C 316.034973 86.904968 279.3302 83.168671 242.523254 83.023254 C 216.545837 83.023254 191.743851 84.37616 163.162796 86.741882 C 115.57682 90.679657 91.360466 120.779938 91.360466 164.821167 C 91.360466 190.579346 100.142929 223.041565 106.476746 239.18576 C 122.348885 279.621826 156.965057 309.189209 201.013916 311.687195 C 216.409988 312.560242 234.965118 313.546509 250.08139 313.546509 C 265.197662 313.546509 282.263916 312.620667 295.369812 311.860992 C 340.534119 309.708618 381.017731 283.339905 401.244171 242.900574 C 411.096191 223.343933 420.139526 196.331116 420.139526 175.97699 C 420.391174 135.790924 391.674713 101.259277 352.116272 94.179047 Z M 835.837219 86.741882 C 807.256165 84.37616 782.454163 83.023254 756.476746 83.023254 C 719.6698 83.168671 682.965027 86.904968 646.883728 94.179047 C 607.321106 101.259979 578.603271 135.797943 578.860474 175.988403 C 578.860474 196.342407 587.903809 223.355255 597.755798 242.911896 C 617.9823 283.351318 658.465881 309.71991 703.630188 311.872406 C 716.736084 312.628174 733.775818 313.5578 748.918579 313.5578 C 764.061401 313.5578 782.590027 312.571533 797.986084 311.698486 C 842.034912 309.200623 876.662415 279.618042 892.523254 239.197052 C 898.857056 223.052856 907.639526 190.590668 907.639526 164.832611 C 907.639526 120.779938 883.423157 90.679657 835.837219 86.741882 Z"/>
    </svg>
    <ul class="navBar">
        <li class="main">Eye Test</li>
        <table>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'newEyeTest.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/eye test/newEyeTest.html.php">New Eye Test</a></li></td>
            </tr>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'manageEyeTest.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/eye test/manageEyeTest.html.php">Manage Eye Test</a></li></td>
            </tr>
        </table>
        <li class="main">Sales</li>
        <table>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'counterSales.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/sales/counterSales.html.php">Counter</a></li></td>
            </tr>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'contactLensSales.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/sales/contactLensSales.html.php">Contact Lens</a></li></td>
            </tr>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'selectionOfSpectacles.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/sales/selectionOfSpectacles.html.php">Selection Of Spectacles</a></li></td>
            </tr>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'receiptOfSpectacles.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/sales/receiptOfSpectacles.html.php">Receipt Of Spectacles</a></li></td>
            </tr>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'collectionOfSpectacles.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/sales/collectionOfSpectacles.html.php">Collection Of Spectacles</a></li></td>
            </tr>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'spectaclesSalesReport.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/sales/spectaclesSalesReport.html.php">Spectacles Sales Report</a></li></td>
            </tr>
        </table>
        <li class="main">Stock</li>
        <table>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'orders.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/stock/orders.html.php">Orders</a></li></td>
            </tr>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'deliveries.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/stock/deliveries.html.php">Deliveries</a></li></td>
            </tr>
        </table>
        <li class="main">Maintenance</li>
        <table>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'customer.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/maintenance/customer.html.php">Customer</a></li></td>
            </tr>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'supplier.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/maintenance/supplier.html.php">Supplier</a></li></td>
            </tr>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'stockItem.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/maintenance/stockItem.html.php">Stock Item</a></li></td>
            </tr>
            <tr>
                <td class="select"><?php if($_SESSION['page'] == 'staff.html.php') echo '>' ?></td>
                <td><li class="sub"><a href="/pages/maintenance/staff.html.php">Staff</a></li></td>
            </tr>
        </table>
        <li class="main"><a>Exit</a></li>
    </ul>
</div>