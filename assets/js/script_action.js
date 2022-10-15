$(document).ready(function() {
    


            $('#register_beneficiary_form').submit(function(e) {
                    e.preventDefault();
                  URL_POST =  $(this).attr('action');
                  console.log()
                    $.ajax({
                        url: URL_POST,
                        method: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: 'html',
                        beforeSend: function() {
                            $("button[type='submit']").html("Proses ...")
                            $("button[type='submit']").prop('disabled', true);
                        },
                        success: function(data) {
                            $("button[type='submit']").html("Submit")
                            $("button[type='submit']").prop('disabled', false);
                            if (JSON.parse(data).status == false) {
                                Swal.fire({
                                    icon: 'warning',
                                    text: JSON.parse(data).message,
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                e.preventDefault();
                                // alert(data);

                            } else {

                                Swal.fire({
                                    icon: 'success',
                                    text: JSON.parse(data).message,
                                    showConfirmButton: false,
                                    timer: 1500
                                })

                                setTimeout(function() {
                                    location.reload();
                                }, 2000);


                                e.preventDefault();
                            }
                        }
                    });
            });


             $('#register_funder_form').submit(function(e) {
                    e.preventDefault();
                  URL_POST =  $(this).attr('action');
                  console.log()
                    $.ajax({
                        url: URL_POST,
                        method: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: 'html',
                        beforeSend: function() {
                            $("button[type='submit']").html("Proses ...")
                            $("button[type='submit']").prop('disabled', true);
                        },
                        success: function(data) {
                            $("button[type='submit']").html("Submit")
                            $("button[type='submit']").prop('disabled', false);
                            if (JSON.parse(data).status == false) {
                                Swal.fire({
                                    icon: 'warning',
                                    text: JSON.parse(data).message,
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                e.preventDefault();
                                // alert(data);

                            } else {

                                Swal.fire({
                                    icon: 'success',
                                    text: JSON.parse(data).message,
                                    showConfirmButton: false,
                                    timer: 1500
                                })

                                setTimeout(function() {
                                    location.reload();
                                }, 2000);


                                e.preventDefault();
                            }
                        }
                    });
            });



            $('#login_beneficiary_form').submit(function(e) {
                    e.preventDefault();
                  URL_POST =  $(this).attr('action');
                  console.log()
                    $.ajax({
                        url: URL_POST,
                        method: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: 'html',
                        beforeSend: function() {
                            $("button[type='submit']").html("Proses ...")
                            $("button[type='submit']").prop('disabled', true);
                        },
                        success: function(data) {
                            $("button[type='submit']").html("Submit")
                            $("button[type='submit']").prop('disabled', false);
                            if (JSON.parse(data).status == false) {
                                Swal.fire({
                                    icon: 'warning',
                                    text: JSON.parse(data).message,
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                e.preventDefault();
                                // alert(data);

                            } else {

                                Swal.fire({
                                    icon: 'success',
                                    text: JSON.parse(data).message,
                                    showConfirmButton: false,
                                    timer: 1500
                                })

                                setTimeout(function() {
                                    location.reload();
                                }, 2000);


                                e.preventDefault();
                            }
                        }
                    });
            });


            $('#login_funder_form').submit(function(e) {
                    e.preventDefault();
                  URL_POST =  $(this).attr('action');
                  console.log()
                    $.ajax({
                        url: URL_POST,
                        method: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: 'html',
                        beforeSend: function() {
                            $("button[type='submit']").html("Proses ...")
                            $("button[type='submit']").prop('disabled', true);
                        },
                        success: function(data) {
                            $("button[type='submit']").html("Submit")
                            $("button[type='submit']").prop('disabled', false);
                            if (JSON.parse(data).status == false) {
                                Swal.fire({
                                    icon: 'warning',
                                    text: JSON.parse(data).message,
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                e.preventDefault();
                                // alert(data);

                            } else {

                                Swal.fire({
                                    icon: 'success',
                                    text: JSON.parse(data).message,
                                    showConfirmButton: false,
                                    timer: 1500
                                })

                                setTimeout(function() {
                                    location.reload();
                                }, 2000);


                                e.preventDefault();
                            }
                        }
                    });
            });
});