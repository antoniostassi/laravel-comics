<div class="w-100" style="background-color:#1C1C1C">
    <div class="container pb-3">
    
        <div class="area-title bg-primary px-4 py-2">
            <h5 class="text-white mt-1"><strong>CURRENT SERIES</strong></h5>
        </div>
        <div class="row">
            @foreach ($comics as $singleItem)
                <div class="col-2 text-white mb-4">
                    <div class="serie-thumb">
                        
                        <img src="{{$singleItem['thumb']}}" alt="{{$singleItem['title']}}">
                    </div>
                    <?php 
                        $title = $singleItem['title'];
                        $title = strtoupper($title);
                    ?>
                    <h6 class="mt-2">{{$title}}</h6>
                </div>
            @endforeach
        </div>

        <div class="btn btn-primary px-5"><strong>LOAD MORE</strong></div>
        
    </div>
</div>

<style lang="scss">
    .area-title {
        position:relative;
        bottom:30px;
        max-width:fit-content;
    }

    .btn.btn-primary {
        border-radius:0px; 
        font-size:0.8rem; 
        width:fit-content;
        display:block;
        margin:0 auto;
    }
    
    .serie-thumb {
        width:210px;
        height:210px;
        &> img {
            width:100%;
            height:100%;
            object-fit:cover;
            object-position:top;
        }
    }
    
</style>