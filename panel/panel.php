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
                    <div class="material-icons-sharp">close</div>
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

</div>