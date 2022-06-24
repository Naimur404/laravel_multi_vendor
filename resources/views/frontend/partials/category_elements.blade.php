<!-- <div class="card-columns">
    @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($category->id) as $key => $first_level_id)
        <div class="card shadow-none border-0">
            <ul class="list-unstyled mb-3">
                <li class="fw-600 border-bottom pb-2 mb-3">
                    <a class="text-reset" href="{{ route('products.category', \App\Models\Category::find($first_level_id)->slug) }}">{{ \App\Models\Category::find($first_level_id)->getTranslation('name') }}</a>
                </li>
                @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($first_level_id) as $key => $second_level_id)
                    <li class="mb-2">
                        <a class="text-reset" href="{{ route('products.category', \App\Models\Category::find($second_level_id)->slug) }}">{{ \App\Models\Category::find($second_level_id)->getTranslation('name') }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div> -->

<div class="card-columns card" id="fetched-menu">
    @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($category->id) as $key => $first_level_id)
        <ul class="list-group list-group-flush" style="padding: 0px !important;">
            <li class="list-group-item category-nav-element" style="padding: 0px !important;">
                <a class="text-truncate text-reset py-2 px-3 d-block" style="font-size: 15px; background-color: #EEF2FF;" href="{{ route('products.category', \App\Models\Category::find($first_level_id)->slug) }}">{{ \App\Models\Category::find($first_level_id)->getTranslation('name') }}</a>

                

                <div class="last-menu-items" style="padding: 0px !important; margin: 0px !important;">
                    @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($first_level_id) as $key => $second_level_id)
                    <ul class="list-group list-group-flush" style="padding: 0px !important;">
                        <li class="list-group-item category-nav-element" style="padding: 0px">
                            <a class="text-truncate text-reset py-2 px-3 d-block"  href="{{ route('products.category', \App\Models\Category::find($second_level_id)->slug) }}">{{ \App\Models\Category::find($second_level_id)->getTranslation('name') }}</a>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </li>
        </ul>            
    @endforeach
</div>



