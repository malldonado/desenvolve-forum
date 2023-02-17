<?php 

    require_once('panel-header.php');

?>

<div class="container">
    <aside>
        <div class="top">
            <div class="logo">
                <img src="./img/logo.png" alt="">
                <!-- <h2>DESENVOLVE</h2> -->
                <div class="close" id="close-btn">
                    <div class="material-icons-sharp active">close</div>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <a href="">
                <div class="material-icons-sharp">grid_view</div>
                <h3>Dashboard</h3>
            </a>
            <a href="" class="active">
                <div class="material-icons-sharp">grid_view</div>
                <h3>Dashboard</h3>
                <span class="message-count">26</span>
            </a>
            <a href="">
                <div class="material-icons-sharp">grid_view</div>
                <h3>Dashboard</h3>
            </a>
            <a href="">
                <div class="material-icons-sharp">grid_view</div>
                <h3>Dashboard</h3>
            </a>
            <a href="">
                <div class="material-icons-sharp">grid_view</div>
                <h3>Dashboard</h3>
            </a>
            <a href="">
                <div class="material-icons-sharp">grid_view</div>
                <h3>Dashboard</h3>
            </a>
            <a href="">
                <div class="material-icons-sharp">grid_view</div>
                <h3>Dashboard</h3>
            </a>
            <a href="">
                <div class="material-icons-sharp">grid_view</div>
                <h3>Dashboard</h3>
            </a>
        </div>

    </aside>

    <!------------------------ END OF ASIDE ------------------------>

    <main>
        <h1>Dashboard</h1>

        <div class="date">
            <input type="date">
        </div>

        <div class="insights">
            <div class="sales">
                <span class="material-icons-sharp">analytics</span>
                <div class="middle">
                    <div class="lef">
                        <h3>Total Sales</h3>
                        <h1>$25,024</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx='38' cy='38' r='36'></circle>
                        </svg>
                        <div class="number">
                            <p>81%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">Last 24 Hours</small>
            </div>

            <div class="expenses">
                <span class="material-icons-sharp">analytics</span>
                <div class="middle">
                    <div class="lef">
                        <h3>Total Sales</h3>
                        <h1>$25,024</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx='38' cy='38' r='36'></circle>
                        </svg>
                        <div class="number">
                            <p>81%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">Last 24 Hours</small>
            </div>

            <div class="income">
                <span class="material-icons-sharp">analytics</span>
                <div class="middle">
                    <div class="lef">
                        <h3>Total Sales</h3>
                        <h1>$25,024</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx='38' cy='38' r='36'></circle>
                        </svg>
                        <div class="number">
                            <p>81%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">Last 24 Hours</small>
            </div>
        </div>

        <div class="recent-orders">
            <h2>Recent Orders</h2>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Number</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Foldable Mini Drone</td>
                        <td>85631</td>
                        <td>Due</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                    <tr>
                        <td>Foldable Mini Drone</td>
                        <td>85631</td>
                        <td>Due</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                    <tr>
                        <td>Foldable Mini Drone</td>
                        <td>85631</td>
                        <td>Due</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                    <tr>
                        <td>Foldable Mini Drone</td>
                        <td>85631</td>
                        <td>Due</td>
                        <td class="warning">Pending</td>
                        <td class="primary">Details</td>
                    </tr>
                </tbody>
            </table>
            <a href="#">Show All</a>
        </div>

    </main>

    <!--END OF MAIN -->

    <div class="right">
        <div class="top">
            <button id="menu-btn">
                <span class="material-icons-sharp">menu</span>
            </button>
            <div class="theme-toggler">
                <span class="material-icons-sharp">light_mode</span>
                <span class="material-icons-sharp">dark_mode</span>
            </div>
            <div class="profile">
                <div class="info">
                    <p>Hey, <b>Daniel</b></p>
                    <small class="text-muted">Admin</small>
                </div>
                <div class="profile-photo">
                    <img src="./img/profile-1.jpg" alt="">
                </div>
            </div>
        </div>

        <!--END OF TOP-->

        <div class="recent-updates">
            <h2>Recent Updates</h2>
            <div class="updates">
                <div class="update">
                    <div class="profile-photo">
                        <img src="./img/profile-2.jpg" alt="">
                    </div>
                    <div class="message">
                        <p><b>Mike Tyson</b> received his order of Night lion tech GPS drone...</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo">
                        <img src="./img/profile-3.jpg" alt="">
                    </div>
                    <div class="message">
                        <p><b>Mike Tyson</b> received his order of Night lion tech GPS drone...</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo">
                        <img src="./img/profile-4.jpg" alt="">
                    </div>
                    <div class="message">
                        <p><b>Mike Tyson</b> received his order of Night lion tech GPS drone...</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                </div>
            </div>
        </div>


        <!------------------END OF RECENT UPDATES------------------>

        <div class="sales-analytics">
            <h2>Sales Analytics</h2>
            <div class="item online">
                <div class="icon">
                    <span class="material-icons-sharp">
                        shopping_cart
                    </span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>ONLINE ORDERS</h3>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <h5 class="success">+39%</h5>
                    <h3>3849</h3>
                </div>
            </div>
            <div class="item offline">
                <div class="icon">
                    <span class="material-icons-sharp">
                        local_mall
                    </span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>OFFLINE ORDERS</h3>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <h5 class="danger">-17%</h5>
                    <h3>1100</h3>
                </div>
            </div>
            <div class="item customers">
                <div class="icon">
                    <span class="material-icons-sharp">
                        person
                    </span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>NEW CUSTOMERS</h3>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <h5 class="success">+25%</h5>
                    <h3>849</h3>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add product</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>