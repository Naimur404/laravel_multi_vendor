<!-- <div class="aiz-user-sidenav-wrap position-relative z-1 shadow-sm">
    <div class="aiz-user-sidenav rounded overflow-auto c-scrollbar-light pb-5 pb-xl-0"> -->
        <div class="category-sidebar" style="height:100%;">
            <div class="category-wrapper">

                <div style="display: flex; justify-content: flex-end !important; font-size: 15px;">
                    <div>
                        <button class="btn btn-sm p-2 " data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav-cat" data-same=".mobile-side-nav-thumb">
                            <i class="fa-solid fa-square-xmark fa-xl"></i>
                        </button>
                    </div>
                </div>

                <ul class="nav-links">
                    @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'desc')->get()->take(11) as $key => $category)
                        <li>
                            <label class="mobile-item label-with-icon">
                                <a href="{{ route('products.category', $category->slug) }}">
                                    {{ $category->getTranslation('name') }}
                                </a>
                                @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)
                                    <div onclick="handleNestedList(this)">
                                        <i class="fa-solid fa-circle-chevron-down fa-style"></i>
                                    </div>
                                @endif
                            </label>
                            @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)
                                <ul class="drop-menu-nested" style="display: none; padding-left: 15px;">
                                    @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($category->id) as $key => $first_level_id)
                                        <li>
                                            <label class="mobile-item label-with-icon">
                                                <a href="{{ route('products.category', \App\Models\Category::find($first_level_id)->slug) }}">
                                                    {{ \App\Models\Category::find($first_level_id)->getTranslation('name') }}
                                                </a>
                                                @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($first_level_id))>0)
                                                    <div onclick="handleNestedList(this)">
                                                        <i class="fa-solid fa-circle-chevron-down fa-style"></i>
                                                    </div>
                                                @endif
                                            </label>
                                            @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($first_level_id))>0)
                                                <ul class="drop-menu-nested" style="display: none; padding-left: 15px;">
                                                    @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($first_level_id) as $key => $second_level_id)
                                                    <li>
                                                        <label class="mobile-item label-with-icon">
                                                            <a href="{{ route('products.category', \App\Models\Category::find($second_level_id)->slug) }}">
                                                                {{ \App\Models\Category::find($second_level_id)->getTranslation('name') }}
                                                            </a>
                                                        </label>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
     <!-- </div> --> 
<!-- </div> -->
