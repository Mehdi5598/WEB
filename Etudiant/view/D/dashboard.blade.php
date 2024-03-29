<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="back">
        <div class="shape"></div>
      </div>
    </div>

    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                 <!-- <img src=""> logo -->
                 <h2>NE<span class="purple">XT</span> </h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                        </span>
                     </div>
            </div>
            <div class="sidebar">
                <!-- Dashboard -->
              <a href="#" class="active">
                <span class="material-icons-sharp">
                    grid_view</span>
                    <h3>Dashboard</h3>
              </a> 
              <!-- Student -->
              <a href="{{asset('student')}}">
                <span class="material-icons-sharp">
                    face_unlock
                    </span>
                    <h3>Student</h3>
              </a> 
              <!-- Pilot -->
              <a href="#">
                <span class="material-icons-sharp">
                    supervisor_account
                    </span>
                    <h3>Pilot</h3>
              </a>
              <!-- Entrprise -->
              <a href="#">
                <span class="material-icons-sharp">
                    apartment
                    </span>
                    <h3>Entrprise</h3>
              </a>
              <!-- Analytics -->
              <a href="#">
                <span class="material-icons-sharp">
                    analytics
                    </span>
                    <h3>Analytics</h3>
              </a>
            </div>
        </aside>
        <!----------------MAIN------------------>
        <main>
            <h1>Dashboard</h1>

            <div class="insights">
              <div class="info">
                <span class="material-icons-sharp">badge</span>
                <div class="middle">
                  <div class="left">
                    <h3>Recent interships</h3>
                    <h1>250</h1>
                  </div>
                  <div class="progress">
                    <svg>
                      <circle cx="38" cy="38" r="36"></circle>
                    </svg>
                    <div class="numbers">
                      <p>85%</p>
                    </div>
                  </div>
                </div>
                 <!-- -------------------------------  -->

              </div>
              <div class="info">
                <span class="material-icons-sharp">
                  people
                  </span>
                <div class="middle">
                  <div class="left">
                    <h3>Number of student</h3>
                    <h1>300</h1>
                  </div>
                  <div class="progress">
                    
                  </div>
                </div>
              </div>
              <!-- --------------------------------------- -->
              <div class="info">
                <span class="material-icons-sharp">
                  work
                  </span>
                <div class="middle">
                  <div class="left">
                    <h3>Numbers of entreprises</h3>
                    <h1>1100</h1>
                  </div>
                  <div class="progress">
                    <svg>
                      <circle cx="38" cy="38" r="36"></circle>
                    </svg>
                    <div class="numbers">
                      <p>85%</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ----------------------------------------- -->
            </div>
            <!-------------------------------------------------------------->
            <div class="recent-interships">
              <h2>Recent Interships</h2>
              <table> 
                <thead>
                  <tr>
                    <th>Student</th>
                    <th>Entrprise</th>
                    <th>Status</th>
                  </tr>

              </thead>
              <tbody>
                <tr>
                  <td>Mehdi BOULALOUA</td>
                  <td>Nvidia</td>
                  <td class="red">Pending</td>
                </tr>
                <tr>
                  <td>Mehdi BOULALOUA</td>
                  <td>Nvidia</td>
                  <td class="red">Pending</td>
                </tr>
                <tr>
                  <td>Mehdi BOULALOUA</td>
                  <td>Nvidia</td>
                  <td class="red">Pending</td>
                </tr>
                <tr>
                  <td>Mehdi BOULALOUA</td>
                  <td>Nvidia</td>
                  <td class="red">Pending</td>
                </tr>
              </tbody>
            </table>
            <a href="#">Show All</a>
            </div>
        </main>
        <!---------------------------------------------------------->
        <div class="right">
          <div class="top">
            <button id="menu-btn">
              <span class="material-icons-sharp">
                menu
                </span>     
            </button>
            <div class="profile">
              <div class="perso">
                <p>Hey ,<b>Mehdi</b></p>
                <small>Admin</small>
              </div>
              <div class="profile-photo">
                <!-- <img src="IMG_20221122_173734.jpg" > -->
                <span class="material-icons-sharp">
                  account_circle
                  </span>
              </div>
            </div>
          </div>
          <!--------------------------------->
          <div class="recent-update">
            <h2>Recent Update</h2>
            <div class="updates">
              <div class="update">
                <div class="profile-photo">
                  <span class="material-icons-sharp">account_circle  </span>
                </div>
                <div class="message">
                  <p><b>Elbatou </b> Applied for an intership</p>
                  <small>2 minutes ago</small>
                </div>
              </div>
              <div class="update">
                <div class="profile-photo">
                  <span class="material-icons-sharp">account_circle  </span>
                </div>
                <div class="message">
                  <p><b>Mehdi </b> still nothing </p>
                  <small>3 minutes ago</small>
                </div>
              </div>
              <div class="update">
                <div class="profile-photo">
                  <span class="material-icons-sharp">account_circle  </span>
                </div>
                <div class="message">
                  <p><b>Amine </b> was eating tacos</p>
                  <small>5 minutes ago</small>
                </div>
              </div>
            </div>
          </div>
          <!----------------------------------------->
          <div class="small-stat">
            <h2>Best stat</h2>
            <div class="stat">
              <div class="icon">
                <span class="material-icons-sharp">visibility</span>
              </div>
              <div class="right">
                <div class="i">
                  <h3>Most viewed</h3>
                  <small>Last 24 Hours</small>
                </div>
              </div>
            </div>
            <div class="stat">
              <div class="icon">
                <span class="material-icons-sharp">star</span>
              </div>
              <div class="right">
                <div class="i">
                  <h3>Most Wishlisted</h3>
                  <small>Last 24 Hours</small>
                </div>
              </div>
            </div>
            <div class="stat">
              <div class="icon">
                <span class="material-icons-sharp">description</span>
              </div>
              <div class="right">
                <div class="i">
                  <h3>Most Applied</h3>
                  <small>Last 24 Hours</small>
                </div>
              </div>
            </div>
          </div>
          
        </div>
    </div>
<script src="./index.js"></script>
</body>
</html>