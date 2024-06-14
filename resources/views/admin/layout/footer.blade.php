<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://farhanatif.netlify.app/" target="_blank">M. Farhan Atif</a> </p>
    </div>
</div>

</div>
</body>

</html>

<script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('admin/vendor/chartjs/chart.bundle.min.js')}}"></script>
<script src="{{asset('admin/vendor/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('admin/vendor/apexchart/apexchart.js')}}"></script>
<script src="{{asset('admin/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin/vendor/jqvmap/js/jquery.vmap.world.js')}}"></script>
<script src="{{asset('admin/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('admin/vendor/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('admin/js/dashboard/dashboard-1.js')}}"></script>
<script src="{{asset('admin/js/custom.min.js')}}"></script>
<script src="{{asset('admin/js/deznav-init.js')}}"></script>
<script src="{{asset('admin/vendor/toastr/js/toastr.min.js')}}"></script>
<script src="{{asset('admin/js/plugins-init/toastr-init.js')}}"></script>
<script src="{{asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/vendor/datatables/responsive/responsive.js')}}"></script>
<script src="{{asset('admin/js/plugins-init/datatables.init.js')}}"></script>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js
"></script>


<script>
    function initAutocomplete() {
        // First autocomplete instance
        var autocomplete1 = new google.maps.places.Autocomplete(
            document.getElementById('patientAddress'), {
                types: ['geocode'],
                componentRestrictions: { country: 'pk' } // Restrict to Pakistan
            }
        );
        autocomplete1.addListener('place_changed', function() {
            var place = autocomplete1.getPlace();
            console.log('Patient Address: ' + place.formatted_address); // Example action: logging the address
        });
        addAutocomplete(document.getElementById('nearAddress'));
    }

    function addAutocomplete(inputElem) {
        new google.maps.places.Autocomplete(inputElem, {
            types: ['geocode'],
            componentRestrictions: { country: 'pk' } // Restrict to Pakistan

        });
    }


</script>



<script>
    $(document).ready(function() {
        $(function() { // Ensure this is run after the document is loaded
            toastr.success("{{ session('success') }}", "Success", {
                positionClass: "toast-bottom-right",
                timeOut: 5000,
                closeButton: true,
                debug: false,
                newestOnTop: true,
                progressBar: true,
                preventDuplicates: true,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                tapToDismiss: false
            });
        });
    });

    $("#toastr-success-bottom-right").on("click", function() {
                toastr.success("This Is Success Message", "Bottom Right", {
                    positionClass: "toast-bottom-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
            }

        ),

        function carouselReview() {
            /*  testimonial one function by = owl.carousel.js */
            jQuery('.testimonial-one').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 0,
                nav: true,
                dots: false,
                navText: ['<i class="las la-long-arrow-alt-left"></i>', '<i class="las la-long-arrow-alt-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },

                    480: {
                        items: 1
                    },

                    767: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            /*Custom Navigation work*/
            jQuery('#next-slide').on('click', function() {
                $('.testimonial-one').trigger('next.owl.carousel');
            });

            jQuery('#prev-slide').on('click', function() {
                $('.testimonial-one').trigger('prev.owl.carousel');
            });
            /*Custom Navigation work*/
        }

    jQuery(window).on('load', function() {
        setTimeout(function() {
            carouselReview();
        }, 1000);
    });

    $('.delete-btn').on('click', function() {
        var deleteUrl = $(this).data('url'); // Get the URL from the data attribute
        console.log("Url : "+ deleteUrl);
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Send AJAX request to the delete URL
                $.ajax({
                    url: deleteUrl,
                    type: 'POST', // Match the method expected by your Laravel route
                    data: {
                        _token: "{{ csrf_token() }}", // CSRF token for Laravel
                    },
                    success: function(response) {
                        Swal.fire({
                            title: "Deleted!",
                            text: "Deleted Successfully.",
                            icon: "success"
                        }).then(() => {
                            window.location.reload(); // Reload the page or redirect
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });

                console.log(deleteUrl);
            } else {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "It is safe :)",
                    icon: "error"
                });
            }

        });
    });

    $('.ban-btn').on('click', function() {
        var deleteUrl = $(this).data('url'); // Get the URL from the data attribute
        console.log("Url : "+ deleteUrl);
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Do it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Send AJAX request to the delete URL
                $.ajax({
                    url: deleteUrl,
                    type: 'POST', // Match the method expected by your Laravel route
                    data: {
                        _token: "{{ csrf_token() }}", // CSRF token for Laravel
                    },
                    success: function(response) {
                        Swal.fire({
                            title: "Done!",
                            text: "Successfully.",
                            icon: "success"
                        }).then(() => {
                            window.location.reload(); // Reload the page or redirect
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });

                console.log(deleteUrl);
            } else {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "It is safe :)",
                    icon: "error"
                });
            }

        });
    });

</script>
