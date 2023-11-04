<header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header" style="padding-left:20px">
			  
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Tasks Menu -->
                 <li class="">
                    <!-- Menu Toggle Button -->
                   <a href="home.php" class="" style="font-size:14px"><i class="glyphicon glyphicon-star-empty"></i> Class Schedule</a>
                  </li>
                  <!-- Tasks Menu -->
                  <!-- Tasks Menu -->
                 <li class="">
                    <!-- Menu Toggle Button -->
                   <a href="exam.php" class="" style="font-size:14px"><i class="glyphicon glyphicon-list-alt"></i> Exam Schedule</a>
                  </li>
                  <!-- Tasks Menu -->
				   <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-file"></i> Entry
                      
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">
						  <li><!-- start notification -->
                            <a href="class.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Class
                            </a>
                          </li><!-- end notification -->
						 
                          <li><!-- start notification -->
                            <a href="room.php">
                              <i class="glyphicon glyphicon-scale text-green"></i> Room
                            </a>
                          </li><!-- end notification -->
						
						  <li><!-- start notification -->
                            <a href="subject.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Subject
                            </a>
                          </li><!-- end notification -->
						  
						            <li><!-- start notification -->
                            <a href="teacher.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Teacher
                            </a>
                          </li><!-- end notification -->
						              <li><!-- start notification -->
                            <a href="signatories.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Signatories
                            </a>
                          </li><!-- end notification -->
                        </ul>
                      </li>
                     
                    </ul>
                  </li>
				  <!-- Tasks Menu -->
				   <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-wrench"></i> Maintenance
                      
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">
						  
						  <li><!-- start notification -->
                            <a href="department.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Department
                            </a>
                          </li><!-- end notification -->
						  <li><!-- start notification -->
                            <a href="designation.php">
                              <i class="glyphicon glyphicon-cutlery text-green"></i> Designation
                            </a>
                          </li><!-- end notification -->
              <li><!-- start notification -->
                            <a href="program.php">
                              <i class="glyphicon glyphicon-cutlery text-green"></i> Program
                            </a>
                          </li><!-- end notification -->
						 
						  <li><!-- start notification -->
                            <a href="rank.php">
                              <i class="glyphicon glyphicon-send text-green"></i> Rank
                            </a>
                          </li><!-- end notification -->
                         
						  <li><!-- start notification -->
                            <a href="salut.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Salutation
                            </a>
                          </li><!-- end notification -->
						  
						  <li><!-- start notification -->
                            <a href="sy.php">
                              <i class="glyphicon glyphicon-user text-green"></i> School Year
                            </a>
                          </li><!-- end notification -->
						  
						  <li><!-- start notification -->
                            <a href="time.php">
                              <i class="glyphicon glyphicon-calendar text-green"></i> Time
                            </a>
                          </li><!-- end notification -->
						
                        </ul>
                      </li>
                     
                    </ul>
                  </li>
                  <!-- Tasks Menu -->
					       <li class="">
                    <!-- Menu Toggle Button -->
                   <a href="settings.php" style="color:#fff;" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-cog text-red"></i>Settings
                      				
                    </a>
                  </li>
                  <!-- Tasks Menu -->
				  <li class="">
                    <!-- Menu Toggle Button -->
                    <a href="profile.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-user text-orange"></i>
                      <?php echo $_SESSION['name'];?>
                    </a>
                  </li>
                  <li class="">
                    <!-- Menu Toggle Button -->
                    <a href="logout.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-off text-red"></i> 
                      
                    </a>
                  </li>
                  
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>