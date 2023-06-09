<div class="modal fade bg-dark bg-opacity-25" id="profileModal">
    <?php if(empty($_SESSION['id'])) {?>
    <div class="modal-dialog modal-md p-4 ">
        <div class="modal-content bg-dark shadow border-0 ">
            <div class="modal-body border-0 my-5">
                <div class="container">
                    <div class="row">
                        <div class="card card-header border-0 bg-transparent p-0 m-0">
                            <h4 class="text-warning text-center mb-5">Sign in</h4>
                            <p class="mx-auto text-center text-white w-75 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis laborum, modi molestiae mollitia natus porro quis rerum voluptates. Aliquid!</p>
                            <div class="card-body bg-transparent border-0">
                                <form action="action.php" method="post" class="">
                                    <div class="row mb-3 mx-3">
                                        <input  type="email" name="email" placeholder="Email Address" class="input-focus form-control-lg border-warning rounded-0 mt-2" maxlength="30">
                                    </div>
                                    <div class="row mb-3 mx-3">
                                        <input type="password" name="password" placeholder="Password" class="input-focus form-control-lg border-warning rounded-0 mt-2" maxlength="15">
                                    </div>
                                    <div class="row mt-5 mx-2">
                                        <input type="submit" class="shadow btn btn-outline-warning border-3 rounded-5 w-50 mx-auto py-2 fs-5 fw-bolder text-uppercase" name="login_btn" value="login">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                Will Edit it later
            </div>
        </div>
    </div>
    <?php } elseif(isset($_SESSION['id'])){?>
        <div class="modal-dialog modal-lg p-4">
            <div class="modal-content bg-dark shadow border-0 ">
                <div class="modal-body border-0 my-5">
                    <div class="container">
                        <div class="row">
                            <div class="card bg-dark border-0">
                                <div class="card-body">
                                    <img src="assets/img/profile/no-profile.png" alt="" class="">
                                    <h1 class=""><?php echo $_SESSION['name'];?></h1>
                                    <h3 class=""><?php echo $_SESSION['email'];?></h3>
                                    <p class=""><?php echo $_SESSION['description'];?></p>
                                </div>
                                <div class="card-footer mx-auto">
                                    <a href="action.php?page=logout" class="btn btn-outline-warning mt-3">Logout</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php }?>
</div>

<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>