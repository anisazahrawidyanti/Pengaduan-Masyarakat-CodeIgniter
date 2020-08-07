<h4 class="card-title text-center mt-3">FORM LOGIN <br> ADMIN/PETUGAS</h4>
                        <form>
                            <div class="form-group row mt-5 mb-3">
                                <label for="inputUsername" class="col-md-3 col-form-label">Username</label>
                                <div class="col-md-9">
                                <input type="text" class="form-control" style="border: none;border-bottom: 1px solid #CACACA; border-radius: 0;" placeholder="Masukan Username">
                                </div>
                            </div>
                            <div class="form-group row mt-5 mb-3">
                                <label for="inputPassword" class="col-md-3 col-form-label">Password</label>
                                <div class="col-md-9">
                                <input type="password" class="form-control" id="inputPassword3" style="border: none;border-bottom: 1px solid #CACACA; border-radius: 0" placeholder="Masukan Password">
                                </div>
                            </div>
                            <div class="form-group mt-5 mb-4 text-center">
                                <input type="submit" name="submit" class="btn btn-primary" value="Masuk">
                                <a href="<?php echo site_url('Dashboard/login_msy') ?>" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>