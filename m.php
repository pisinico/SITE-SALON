<html>
 <h1 class="mb-4">Contacteaza-ne</h1>
                        <!--<div id="success"></div>-->
                        <form action="cc.php" method="post" >
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control border-0 p-4" name="nume" id="name" placeholder="Nume"
                                        required="required" data-validation-required-message="Introdu numele" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control border-0 p-4" name="email " id="email" placeholder="Email"
                                        required="required" data-validation-required-message="Introdu adresa de email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="subiect" id="subject" placeholder="Subiect"
                                    required="required" data-validation-required-message="Introdu subiectul" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="3" name="mesaj" id="message" placeholder="Mesaj"
                                    required="required"
                                    data-validation-required-message="Te rog introdu mesajul"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary py-3 px-4"  >Trimite</button>
                            </div>
                        </form>
</html>