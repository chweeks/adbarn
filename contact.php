<?php include 'inc/header.php'; ?>

    <article>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Contact Us</h2>
            <hr>
          </div>
          <div class="col-md-8">
            <form role="form">
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email">
              </div>
              <textarea class="form-control" rows="3" placeholder="Your message"></textarea>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>

              <button type="submit" class="btn btn-md btn-success">Send</button>
            </form>

          </div>
          <div class="col-md-4 other-info">
            <div class="well-sm well">
              <h4>Other contact info</h4>
              <p>
                <i class="fa fa-user"></i> John Smith
              </p>
              <p>
                <i class="fa fa-location-arrow"></i> New York, John's Bvd. 9
              </p>
              <p>
                <i class="fa fa-phone"></i> 555-889-775
              </p>
              <p>
                <i class="fa fa-envelope-o"></i> email@address.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </article>

<?php include 'inc/footer.php'; ?>
