@extends('layouts.app')

@section('content')

<div class="row" id="menucontent">
    
    <div class="col-md-12 mt-5" id="menutext">
        <h1 class="text-center mt-5 menutext">Меню</h1>
     </div>

    <div id="main-header" class="fixed-header mb-2">
        <nav>
            <ul>
                @foreach ($categories as $category)
                    <li><a href="" title="{{$category->title}}" id="product-Category">{{$category->title}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>

    <section id="category-Section">
      
    </section>



</div>
<script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/menuspy@latest/dist/menuspy.min.js"></script>
<script>
    $(document).ready(function(){  
    $("#category-Section").load('/admin/category/' + 'Салати');
    $('#product-Category').parent().addClass('active');
    }); 

    var elm = document.querySelector('#main-header');
    var ms = new MenuSpy(elm);
</script>

<script>
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 240) {
            $('#main-header').addClass('scroll-header');
            $('#menucontent').addClass('padded');
        }
        else {
            $('#main-header').removeClass('scroll-header');
            $('#menucontent').removeClass('padded');
        }
    });

    
</script>


<script>
 $('#main-header').click(function (event) {
    event.preventDefault();

    $('li').removeClass('active');
    $(event.target).parent().addClass('active');

    var selectedCategoryPage = event.target.attributes[1].value;
    $("#category-Section").load('/admin/category/' + selectedCategoryPage);
    });
</script>
@endsection