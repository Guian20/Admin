<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
               <div class="logo">
                    <img src="image.png">
                    <h2>CUP<span class="danger">EXP</span></h2>
               </div>
               <div class="close" id="close-btn">
                <span class="material-symbols-outlined">close</span>
                </div>
             </div>
            
             <div class="sidebar">
                <a href="index.php" class="active">
                  <span class="material-symbols-outlined">grid_view</span>
                  <h3>Dashboard</h3>
                </a>
                <a href="menu.php">
                  <span class="material-symbols-outlined">emoji_food_beverage</span>
                    <h3>Menu</h3>
                </a>
                <a href="order.php">
                    <span class="material-symbols-outlined">orders</span>
                    <h3>Order</h3>
                </a>
                <a href="favorite.php">
                    <span class="material-symbols-outlined">favorite</span>
                    <h3>Favorites</h3>
                </a>
                <a href="promotions.php">
                    <span class="material-symbols-outlined">app_promo</span>
                    <h3>Promotions</h3>
                    <span class="message-count">27</span>
                </a>
                <a href="table_reservation.php">
                    <span class="material-symbols-outlined">table_restaurant</span>
                    <h3>Table Reservations</h3>
                </a>
                <a href="receipts.php">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <h3>Receipts</h3>
                </a>
                <a href="user.php">
                    <span class="material-symbols-outlined">person</span>
                    <h3>User</h3>
                </a>
                <a href="reviews_feedback.php">
                    <span class="material-symbols-outlined">rate_review</span>
                    <h3>Reviews and Feedback</h3>
                </a>
                <a href="settings.php">
                    <span class="material-symbols-outlined">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="logout.php">
                  <span class="material-symbols-outlined">logout</span>
                  <h3>Logout</h3>
                </a>
             </div>
         </aside>

         <main>
              <h1>Sales Summary</h1>

              <div class="date">
                  <input type="date">
              </div>

              <div class="insights">
                  <div class="sales">
                    <span class="material-symbols-outlined">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Daily</h3>
                            <h1>₱25,024</h1>
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
                  <!-- END OF SALES -->
                  <div class="expenses">
                    <span class="material-symbols-outlined">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Weekly</h3>
                            <h1>₱14,160</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                  </div>
                  <!-- END OF EXPENSES -->
                  <div class="income">
                    <span class="material-symbols-outlined">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Monthly</h3>
                            <h1>₱10,864</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                  </div>
                  <!-- END OF INCOME -->
                </div>
                <!-- END OF INSIGHTS -->

                <div class="recent-orders">
                    <h2>Popular Menu Items</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Number</th>
                                <th>Price</th>
                                <th>Picture</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cafe Mocha</td>
                                <td>85631</td>
                                <td>₱67.00</td>
                                <td class="warning">Pending</td>
                                <td class="primary"><a href="#">Details</a></td>
                            </tr>
                            <tr>
                                <td>Flat White</td>
                                <td>85631</td>
                                <td>₱87.00</td>
                                <td class="warning">Pending</td>
                                <td class="primary"><a href="#">Details</a></td>
                            </tr>
                            <tr>
                                <td>Mocha Fusi</td>
                                <td>85631</td>
                                <td>₱50.00</td>
                                <td class="warning">Pending</td>
                                <td class="primary"><a href="#">Details</a></td>
                            </tr>
                            <tr>
                                <td>Cafe Panna</td>
                                <td>85631</td>
                                <td>₱49.00</td>
                                <td class="warning">Pending</td>
                                <td class="primary"><a href="#">Details</a></td>
                            </tr>
                            <tr>
                                <td>Matcha Latte</td>
                                <td>85631</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary"><a href="#">Details</a></td>
                            </tr>
                            <tr>
                                <td>Classic Espresso</td>
                                <td>85631</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary"><a href="#">Details</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#">Show All</a>
                </div>
          </main>
          <!-- END OF MAIN -->

          <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                </div>
                <div class="notif">
                          <i class="fa-solid fa-bell fa-2x"></i>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Guian</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="img.jpg">
                    </div>
                </div>
            </div>
            <!-- END OF TOP -->
             <div class="recent-updates">
                <h2>Recent Customer Feedback</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img.jpg">
                        </div>
                        <div class="message">
                            <p><b>Manny Pacquiao</b> received his order of Gloves for boxing.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img.jpg">
                        </div>
                        <div class="message">
                            <p><b>Manny Pacquiao</b> received his order of Gloves for boxing.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img.jpg">
                        </div>
                        <div class="message">
                            <p><b>Manny Pacquiao</b> received his order of Gloves for boxing.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                </div>
             </div>
             <!-- END OF RECENT UPDATES -->
             <div class="sales-analytics">
                <h2>Notifications Panel</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
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
                        <span class="material-symbols-outlined">local_mall</span>
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
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>NEW CUSTOMERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+25%</h5>
                        <h3>849</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-symbols-outlined">add</span>
                        <h3>Add Product</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./index.js"></script>
</body>
</html>