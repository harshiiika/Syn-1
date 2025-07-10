<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">
  <link rel="stylesheet" href= "{{asset('css/emp.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>

<body>
  <div class="header">
    <div class="logo">
      <img src="{{asset('images/logo.png.jpg')}}" class="img">
      <button class="toggleBtn" id="toggleBtn"><i class="fa-solid fa-bars"></i></button>
    </div>
    <div class="pfp">
      <div class="session">
        <h5>Session:</h5>
        <select>
          <option>2024-2025</option>
          <option>2026</option>
        </select>
      </div>
      <i class="fa-solid fa-bell"></i>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" id="toggle-btn" type="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa-solid fa-user"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/profile/profile.html"> <i class="fa-solid fa-user"></i>Profile</a></li>
          <li><a class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log In</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="main-container">

    <div class="left" id="sidebar">

      <div class="text" id="text">
        <h6>ADMIN</h6>
        <p>synthesisbikaner@gmail.com</p>
      </div>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
              id="accordion-button">
              <i class="fa-solid fa-user-group" id="side-icon"></i>User Management </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="menu" id="dropdown-body">
                <li><a class="item" href="/user management/emp/emp.html "> <i class="fa-solid fa-user"
                      id="side-icon"></i> Employee</a></li>
                <li><a class="item" href="/user management/batches a/batchesa.html"><i class="fa-solid fa-user-group"
                      id="side-icon"></i> Batches
                    Assignment</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"
              id="accordion-button">
              <i class="fa-solid fa-user-group" id="side-icon"></i> Master </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="menu" id="dropdown-body">
                <li><a class="item" href="/master/courses/course.html"><i class="fa-solid fa-book-open"
                      id="side-icon"></i> Courses</a></li>
                <li><a class="item" href="/master/batches/batches.html"><i
                      class="fa-solid fa-user-group fa-flip-horizontal" id="side-icon"></i>
                    Batches</a></li>
                <li><a class="item" href="/master/scholarship/scholar.html"><i class="fa-solid fa-graduation-cap"
                      id="side-icon"></i> Scholarship</a>
                </li>
                <li><a class="item" href="/master/feesm/fees.html"><i class="fa-solid fa-credit-card"
                      id="side-icon"></i> Fees Master</a></li>
                <li><a class="item" href="/master/other fees/other.html"><i class="fa-solid fa-wallet"
                      id="side-icon"></i> Other Fees Master</a>
                </li>
                <li><a class="item" href="/master/branch/branch.html"><i class="fa-solid fa-diagram-project"
                      id="side-icon"></i> Branch
                    Management</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"
              id="accordion-button">
              <i class="fa-solid fa-user-group" id="side-icon"></i>Session Management
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="menu" id="dropdown-body">
                <li><a class="item" href="/session mana/session/session.html"><i class="fa-solid fa-calendar-day"
                      id="side-icon"></i> Session</a></li>
                <li><a class="item" href="/session mana/calendar/cal.html"><i class="fa-solid fa-calendar-days"
                      id="side-icon"></i> Calendar</a></li>
                <li><a class="item" href="/session mana/student/student.html"><i class="fa-solid fa-user-check"
                      id="side-icon"></i> Student Migrate</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour"
              id="accordion-button">
              <i class="fa-solid fa-user-group" id="side-icon"></i>Student Management

            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="menu" id="dropdown-body">
                <li><a class="item" href="/student management/inq/inq.html"><i class="fa-solid fa-circle-info" id="side-icon"></i> Inquiry
                    Management</a></li>
                <li><a class="item" href="/student management/stu onboard/onstu.html"><i class="fa-solid fa-user-check" id="side-icon"></i>Student Onboard</a>
                </li>
                <li><a class="item" href="/student management/pending/pending.html"><i class="fa-solid fa-user-check" id="side-icon"></i>Pending Fees
                    Students</a></li>
                <li><a class="item" href="/student management/students/stu.html"><i class="fa-solid fa-user-check" id="side-icon"></i>Students</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive"
              id="accordion-button">
              <i class="fa-solid fa-credit-card" id="side-icon"></i> Fees Management
            </button>
          </h2>
          <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="menu" id="dropdown-body">
                <li><a class="item" href="/fees management/collect/collect.html"><i class="fa-solid fa-credit-card" id="side-icon"></i> Fees Collection</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix"
              id="accordion-button">
              <i class="fa-solid fa-user-check" id="side-icon"></i> Attendance Managment
            </button>
          </h2>
          <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="menu" id="dropdown-body">
                <li><a class="item" href="/attendance management/students/student.html"> <i class="fa-solid fa-user" id="side-icon"> </i>Student</a></li>
                <li><a class="item" href="/attendance management/employee/employee.html"> <i class="fa-solid fa-user" id="side-icon"> </i>Employee</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven"
              id="accordion-button">
              <i class="fa-solid fa-book-open" id="side-icon"></i> Study Material
            </button>
          </h2>
          <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="menu" id="dropdown-body">
                <li><a class="item" href="/study material/units/units.html"> <i class="fa-solid fa-user" id="side-icon"> </i>Units</a></li>
                <li><a class="item" href="/study material/dispatch/dispatch.html"> <i class="fa-solid fa-user" id="side-icon"> </i>Dispatch Material</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight"
              id="accordion-button">
              <i class="fa-solid fa-chart-column" id="side-icon"></i> Test Series Managment
            </button>
          </h2>
          <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="menu" id="dropdown-body">
                <li><a class="item" href="/testseries/test.html"> <i class="fa-solid fa-user" id="side-icon"> </i>Test Master</i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine"
              id="accordion-button">
              <i class="fa-solid fa-square-poll-horizontal" id="side-icon"></i> Reports</i>
            </button>
          </h2>
          <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="menu" id="dropdown-body">
                <li><a class="item" href="/reports/walk in/walk.html"> <i class="fa-solid fa-user" id="side-icon"> </i>Walk In</a></li>
                <li><a class="item" href="/reports/att/att.html"><i class="fa-solid fa-calendar-days" id="side-icon"></i> Attendance</a>
                </li>
                <li><a class="item" href="/reports/test/test.html"><i class="fa-solid fa-file" id="side-icon"></i>Test Series</a></li>
                <li><a class="item" href="/reports/inq/inq.html"><i class="fa-solid fa-file" id="side-icon"></i>Inquiry History</a></li>
                <li><a class="item" href="/reports/onboard/onboard.html"><i class="fa-solid fa-file" id="side-icon"></i>Onboard History</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="right" id="right">
      <div class="top">
        <div class="top-text">
          <h4>EMPLOYEE</h4>
        </div>
        <div class="buttons">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalOne"
            id="add">
            Add Employee
          </button>

          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalTwo"
            id="up">
            Upload
          </button>
        </div>
      </div>
      <div class="whole">
        <div class="dd">
          <div class="line">
            <h6>Show Enteries:</h6>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" id="number" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                10
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item">10</a></li>
                <li><a class="dropdown-item">25</a></li>
                <li><a class="dropdown-item"> 50</a></li>
                <li><a class="dropdown-item">100</a></li>
              </ul>
            </div>
          </div>
          <div class="search">
            <h4 class="search-text">Search</h4>
            <input type="search" placeholder="" class="search-holder" required>
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>
        </div>

        <table class="table table-hover" id="table">
          <thead>
            <tr>
              <th scope="col" id="one">Serial No.</th>
              <th scope="col" id="one">Name</th>
              <th scope="col" id="one">Email</th>
              <th scope="col" id="one">Department</th>
              <th scope="col" id="one">Role</th>
              <th scope="col" id="one">Status</th>
              <th scope="col" id="one">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Arti </td>
              <td>maru@gmail.com</td>
              <td>Office</td>
              <td>Front Office</td>
              <td>Active</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    id="ellipsis"><i class="fa-solid fa-ellipsis-vertical" style="color: #000;"></i></button>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalThree"
                        id="editBtn">Edit</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFour">View
                        details</a></li>
                 <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFive">Password Update</a></li>
                    <li><a class="dropdown-item">Deactive</a></li>
                  </ul>
                </div>
            </tr>
            <tr>
              <td>2</td>
              <td>Harsh</td>
              <td>harsh@gmail.com</td>
              <td>Office</td>
              <td>Front Office</td>
              <td>Active</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    id="ellipsis"><i class="fa-solid fa-ellipsis-vertical" style="color: #000;"></i></button>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalThree"
                        id="editBtn">Edit</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFour">View
                        details</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFive">Password Update</a></li>
                    <li><a class="dropdown-item">Deactive</a></li>
                  </ul>
                </div>
            </tr>
            <tr>
              <td>3</td>
              <td>Nitin</td>
              <td>nitin@gmail.com</td>
              <td>Office</td>
              <td>Front Office</td>
              <td>Active</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    id="ellipsis"><i class="fa-solid fa-ellipsis-vertical" style="color: #000;"></i></button>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalThree"
                        id="editBtn">Edit</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFour">View
                        details</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFive">Password Update</a></li>
                    <li><a class="dropdown-item">Deactive</a></li>
                  </ul>
                </div>
            </tr>
            <tr>
              <td>4</td>
              <td>Bhavna</td>
              <td>bhavna@gmail.com</td>
              <td>Office</td>
              <td>Front Office</td>
              <td>Active</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    id="ellipsis"><i class="fa-solid fa-ellipsis-vertical" style="color: #000;"></i></button>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalThree"
                        id="editBtn">Edit</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFour">View
                        details</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFive">Password Update</a></li>
                    <li><a class="dropdown-item">Deactive</a></li>
                  </ul>
                </div>
            </tr>
            <tr>
              <td>5</td>
              <td>harshita</td>
              <td>harshita@gmail.com</td>
              <td>Office</td>
              <td>Front Office</td>
              <td>Active</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    id="ellipsis"><i class="fa-solid fa-ellipsis-vertical" style="color: #000;"></i></button>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalThree"
                        id="editBtn">Edit</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFour">View
                        details</a></li>
                  <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFive">Password Update</a></li>
                    <li><a class="dropdown-item">Deactive</a></li>
                  </ul>
                </div>
            </tr>
            <tr>
              <td>6</td>
              <td>Meenal</td>
              <td>meenal@gmail.com</td>
              <td>Office</td>
              <td>Front Office</td>
              <td>Active</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    id="ellipsis"><i class="fa-solid fa-ellipsis-vertical" style="color: #000;"></i></button>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalThree"
                        id="editBtn">Edit</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFour">View
                        details</a></li>
                 <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFive">Password Update</a></li>
                    <li><a class="dropdown-item">Deactive</a></li>
                  </ul>
                </div>
            </tr>
            <tr>
              <td>7</td>
              <td>Aditya</td>
              <td>aditya@gmail.com</td>
              <td>Office</td>
              <td>Front Office</td>
              <td>Active</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    id="ellipsis"><i class="fa-solid fa-ellipsis-vertical" style="color: #000;"></i></button>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalThree"
                        id="editBtn">Edit</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFour">View
                        details</a></li>
               <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFive">Password Update</a></li>
                    <li><a class="dropdown-item">Deactive</a></li>
                  </ul>
                </div>
            </tr>
            <tr>
              <td>8
              </td>
              <td>Palak</td>
              <td>palak@gmail.com</td>
              <td>Office</td>
              <td>Front Office</td>
              <td>Active</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    id="ellipsis"><i class="fa-solid fa-ellipsis-vertical" style="color: #000;"></i></button>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalThree"
                        id="editBtn">Edit</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFour">View
                        details</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFive">Password Update</a></li>
                    <li><a class="dropdown-item">Deactive</a></li>
                  </ul>
                </div>
            </tr>
            <tr>
              <td>9</td>
              <td>Shiv</td>
              <td>shiv@gmail.com</td>
              <td>Office</td>
              <td>Front Office</td>
              <td>Active</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    id="ellipsis"><i class="fa-solid fa-ellipsis-vertical" style="color: #000;"></i></button>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalThree"
                        id="editBtn">Edit</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFour">View
                        details</a></li>
                   <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFive">Password Update</a></li>
                    <li><a class="dropdown-item">Deactive</a></li>
                  </ul>
                </div>
            </tr>
            <tr>
              <td>10</td>
              <td>Ansh</td>
              <td>ansh@gmail.com</td>
              <td>Office</td>
              <td>Front Office</td>
              <td>Active</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    id="ellipsis"><i class="fa-solid fa-ellipsis-vertical" style="color: #000;"></i></button>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalThree"
                        id="editBtn">Edit</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFour">View
                        details</a></li>
                 <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalFive">Password Update</a></li>
                    <li><a class="dropdown-item">Deactive</a></li>
                  </ul>
                </div>
            </tr>
          </tbody>

        </table>

      </div>
      <div class="footer">
        <div class="left-footer">
          <p>Showing 1 to 10 of 10 Enteries</p>
        </div>
        <div class="right-footer">
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item"><a href="#" class="page-link" id="pg1">Previous</a></li>
              <li class="page-item active">
                <a class="page-link" href="#" aria-current="page" id="pg2">1</a>
              </li>
              <li class="page-item"><a class="page-link" href="/user management/emp/emp2.html" id="pg3">2</a></li>
              <li class="page-item"><a class="page-link" href="#" id="pg1">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="modal fade" id="exampleModalOne" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content" id="content-one">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Employee</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="mb-3">
            <label for="basic-url" class="form-label">Mobile No.</label>
            <div class="input-group">
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                placeholder="Enter Your Mobile Number" required>
            </div>

            <div class="mb-3">
              <label for="basic-url" class="form-label">Alternate Mobile No.</label>
              <div class="input-group">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                  placeholder="Enter Your Alternate Mobile Number" required>
              </div>

              <div class="mb-3">
                <label for="basic-url" class="form-label">Email</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                    placeholder="Enter Your Email id" required>
                </div>


                <div class="mb-3">
                  <label for="basic-url" class="form-label">Select Branch Name</label>
                  <div class="input-group">

                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" id="number" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Select Branch Name
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item">Select Branch Name</a></li>
                        <li><a class="dropdown-item">Bikaner</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
                <div class="mb-3">
                  <label for="basic-url" class="form-label">Select Role</label>
                  <div class="input-group">

                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" id="number" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Select Role
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item">Teacher</a></li>
                        <li><a class="dropdown-item">Back Office</a></li>
                        <li><a class="dropdown-item">Front Office</a></li>
                        <li><a class="dropdown-item">Floor Incharge</a></li>
                        <li><a class="dropdown-item">Account Executive</a></li>
                        <li><a class="dropdown-item">Test Series Executive</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="basic-url" class="form-label">Password</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                      placeholder="Enter Password" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="basic-url" class="form-label">Confirm Password</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                      placeholder="Enter Confirm Password" required>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="file" class="form-control" id="inputGroupFile01">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer" id="footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="submit">Cancel</button>
          <button type="button" class="btn btn-primary" id="add">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalTwo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      
        <div class="modal-dialog">
          <div class="modal-content" id="modal-two">
            <div class="modal-header">
              <h2 class="modal-title fs-5" id="exampleModalLabel">Upload</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body" id="sample-body">
              <a href="/user management/emp/employees_synthesis.xlsx"><button class="sampleFile" id="xlsx">Download
                  Sample File</button></a>
              <form action="upload.php" method="post" enctype="multipart/form-data" id="form-control">
                <input type="file" class="form-control" id="inputGroupFile01">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="submit">Close</button>
              <button type="button" class="btn btn-primary" id="add">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalThree" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content" id="content-one">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: orangered;">Update Employee</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="mb-3">
            <label for="basic-url" class="form-label">Name</label>
            <div class="input-group">
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                placeholder="" required>
            </div>

            <div class="mb-3">
              <label for="basic-url" class="form-label">Enter Mobile No.</label>
              <div class="input-group">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                  placeholder=" 8003094135" required>
              </div>

              <div class="mb-3">
                <label for="basic-url" class="form-label">Alt No.</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                    placeholder=" 8003094135" required>
                </div>

                <div class="mb-3">
                  <label for="basic-url" class="form-label">Enter your Email</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                      placeholder=" " required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="basic-url" class="form-label">Enter Branch</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                      placeholder=" " required>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer" id="footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="submit">Cancel</button>
          <button type="button" class="btn btn-primary" id="add">Submit</button>
        </div>
      </div>
    </div>

  </div>
  <div class="modal fade" id="exampleModalFour" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content" id="content-one">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: orangered;">Update Employee</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="mb-3">
            <label for="basic-url" class="form-label">Name</label>
            <div class="input-group">
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                placeholder="Arti Maru" readonly>
            </div>

            <div class="mb-3">
              <label for="basic-url" class="form-label">Enter Mobile No.</label>
              <div class="input-group">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                  placeholder=" 8003094135" readonly>
              </div>

              <div class="mb-3">
                <label for="basic-url" class="form-label">Alt No.</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                    placeholder=" 8003094135" readonly>
                </div>

                <div class="mb-3">
                  <label for="basic-url" class="form-label">Enter your Email</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                      placeholder="maru@gmail.com " readonly>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="basic-url" class="form-label">Enter Branch</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                      placeholder="Bikaner " readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer" id="footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="submit">Cancel</button>
          <button type="button" class="btn btn-primary" id="add">Submit</button>
        </div>
      </div>
    </div>

  </div>
    <div class="modal fade" id="exampleModalFive" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-dialog">
          <div class="modal-content" id="modal-two">
            <div class="modal-header">
              <h2 class="modal-title fs-5" id="exampleModalLabel">Update Password</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body" >
            <form id="pass">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
</form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="submit">Close</button>
              <button type="button" class="btn btn-primary" id="add">Update</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script src="{{asset('js/emp.js')}}"></script>

</html>