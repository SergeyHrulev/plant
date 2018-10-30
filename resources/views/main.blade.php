@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div id="section-slider">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 img-fluid" src="{{ asset('img/1.jpg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-fluid" src="{{ asset('img/2.jpg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-fluid" src="{{ asset('img/3.jpg') }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12 py-4">
                <h2>Продукция</h2>
            </div>
                <div class="col-4">
                    <div class="media">
                        <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Media heading</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="media">
                        <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Media heading</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="media">
                        <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">Media heading</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="container my-5 py-5" style="border-bottom: #383d41 dotted 2px; border-top: #383d41 dotted 2px;">
        <div class="row">
            <h2>О компании</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium at aut cum cumque eligendi eos, error excepturi fugiat odit quas recusandae reprehenderit vitae! Aperiam architecto autem consectetur cum dignissimos eius eligendi ipsum neque perferendis. Aperiam assumenda commodi, dolor eos hic ipsum iusto mollitia nobis officiis placeat quaerat ratione saepe tenetur, ullam voluptatum? At consectetur ea harum labore non optio pariatur perspiciatis quis quos. Amet beatae illum mollitia nisi omnis placeat praesentium quia recusandae rerum voluptate! Accusamus cumque debitis delectus deserunt ducimus ea esse exercitationem fugiat magnam mollitia perspiciatis possimus quae quasi quibusdam, reiciendis temporibus veniam. Ab accusamus aspernatur at atque beatae blanditiis corporis ex excepturi exercitationem fuga fugit hic iure laboriosam magnam magni mollitia natus nulla optio quas quasi quisquam ratione reiciendis similique veniam, voluptas. Ab delectus eos error et fuga ipsa ipsum iste nobis nostrum officia optio perspiciatis placeat quaerat quia quisquam saepe, temporibus tenetur vel vitae, voluptate.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium at aut cum cumque eligendi eos, error excepturi fugiat odit quas recusandae reprehenderit vitae! Aperiam architecto autem consectetur cum dignissimos eius eligendi ipsum neque perferendis. Aperiam assumenda commodi, dolor eos hic ipsum iusto mollitia nobis officiis placeat quaerat ratione saepe tenetur, ullam voluptatum? At consectetur ea harum labore non optio pariatur perspiciatis quis quos. Amet beatae illum mollitia nisi omnis placeat praesentium quia recusandae rerum voluptate! Accusamus cumque debitis delectus deserunt ducimus ea esse exercitationem fugiat magnam mollitia perspiciatis possimus quae quasi quibusdam, reiciendis temporibus veniam. Ab accusamus aspernatur at atque beatae blanditiis corporis ex excepturi exercitationem fuga fugit hic iure laboriosam magnam magni mollitia natus nulla optio quas quasi quisquam ratione reiciendis similique veniam, voluptas. Ab delectus eos error et fuga ipsa ipsum iste nobis nostrum officia optio perspiciatis placeat quaerat quia quisquam saepe, temporibus tenetur vel vitae, voluptate.</p>
        </div>
    </div>

    <div class="row"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 my-2 py-3">
                <h2>Проекты</h2>
            </div>
            <div class="col">
                <span>28.10.2018</span><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque doloremque earum, eligendi hic incidunt libero modi molestias quas repellat suscipit.</p>
            </div>
            <div class="col">
                <span>28.10.2018</span><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque doloremque earum, eligendi hic incidunt libero modi molestias quas repellat suscipit.</p>
            </div>
            <div class="col">
                <span>28.10.2018</span><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque doloremque earum, eligendi hic incidunt libero modi molestias quas repellat suscipit.</p>
            </div>
        </div>
    </div>
    @endsection
