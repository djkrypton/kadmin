<div class="pagetitle">
  <h1>General Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">General</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body" id="users">
          <h5 class="card-title">Default Table</h5>
          <input class="search" placeholder="Search" />

          <!-- Default Table -->
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col" class="sort" data-sort="name">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Age</th>
                <th scope="col">Start Date</th>
              </tr>
            </thead>
            <tbody class="list">
              <tr>
                <th scope="row">1</th>
                <td class="name">Brandon Jacob</td>
                <td class="title">Designer</td>
                <td>28</td>
                <td>2016-05-25</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td class="name">Bridie Kessler</td>
                <td class="title">Developer</td>
                <td>35</td>
                <td>2014-12-05</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td class="name">Ashleigh Langosh</td>
                <td class="title">Finance</td>
                <td>45</td>
                <td>2011-08-12</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td class="name">Angus Grady</td>
                <td class="title">HR</td>
                <td>34</td>
                <td>2012-06-11</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td class="name">Raheem Lehner</td>
                <td class="title">Dynamic Division Officer</td>
                <td>47</td>
                <td>2011-04-19</td>
              </tr>
            </tbody>
          </table>
          <!-- End Default Table Example -->
          <ul class="pagination"></ul>
        </div>
      </div>

    </div>

  </div>
</section>

<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
<script>
  var options = {
  valueNames: [ 'name', 'title' ],
  page: 3,
  pagination: true
};

var userList = new List('users', options);
</script>