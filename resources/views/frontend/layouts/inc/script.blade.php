<script src="{{ asset('frontend/assets') }}/js/vendor/jquery-min.js"></script>
<script src="https://cdn.kkiapay.me/k.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('frontend/assets') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/assets') }}/js/jquery-plugin-collection.js"></script>
<script src="{{ asset('frontend/assets') }}/js/vendor/modernizr.js"></script>
<script src="{{ asset('frontend/assets') }}/js/main.js"></script>
<script src="{{ asset('frontend/assets') }}/js/custom.js"></script>
<!-- Show dynamic validation errors -->
<script>
    @if (!empty($errors->all()))
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}", )
        @endforeach
    @endif
</script>

<script>
    $(document).ready(function() {
        // Csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // sweet alert for delete
        $('body').on('click', '.delete-item', function(e) {
            e.preventDefault();
            let deleteUrl = $(this).attr('href');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: deleteUrl,
                        success: function(data) {
                            if (data.status == 'error') {
                                Swal.fire(
                                    'You can not delete!',
                                    'This category contain items cant be deleted!',
                                    'error'
                                )
                            } else {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                window.location.reload();
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    })
                }
            })
        })

        let offset = 3;
        $('#load-more').on('click', function(e) {
            e.preventDefault();

            let moreUrl = $(this).attr('href');

            $.ajax({
                url: moreUrl,
                type: 'GET',
                data: {
                    offset: offset,
                },
                beforeSend: function() {
                    $('#load-more').prop('disabled', true).text('Chargement...');
                },
                success: function(response) {
                    $('#serviceList').append(response.service)

                    offset += 3;

                    // Cacher le bouton "Voir plus" s'il n'y a plus de coffrets à charger
                    if (!response.remaining) {
                        $('#load-more').hide();
                    } else {
                        // Réactiver le bouton et remettre le texte par défaut
                        $('#load-more').prop('disabled', false).text('Voir plus');
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    // Réactiver le bouton en cas d'erreur
                    $('#load-more').prop('disabled', false).text('Voir plus');
                }
            })
        })
    })
</script>

@stack('scripts')
