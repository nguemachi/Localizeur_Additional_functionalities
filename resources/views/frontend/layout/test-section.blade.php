<section>
    <div class="container big-container">
        <div class="section-title">
            <h2><span>{{ __('most-popular-place') }}</span></h2>
            <div class="section-subtitle">@lang(Best Listings)</div>
            <span class="section-separator"></span>
            <p>{{ __('most-popular-place-text') }}</p>
        </div>
        <div class="listing-filters gallery-filters fl-wrap">
            <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">@lang(All Categories)</a>
            <a href="#" class="gallery-filter" data-filter=".restaurant">@lang(Restaurants )</a>
            <a href="#" class="gallery-filter" data-filter=".hotels">@lang(Hotels)</a>
            <a href="#" class="gallery-filter" data-filter=".events">@lang(Events)</a>
            <a href="#" class="gallery-filter" data-filter=".fitness">@lang(Fitness)</a>
        </div>
        <div class="grid-item-holder gallery-items fl-wrap">
            <!--  gallery-item-->
            <div class="gallery-item restaurant events">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>@lang(Save)</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="{{ asset('frontend/images/all/1.jpg')}}" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="{{ asset('frontend/images/avatar/1.jpg')}}" alt=""></a>
                                <span class="avatar-tooltip">@lang(Added By ) <strong>Alisa Noory</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>@lang(Open Now)</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.8</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <br>
                                    <div class="reviews-count">12 @lang(reviews)</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">@lang(Luxary Resaturant)</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">@lang(Our carefully curated list features the finest dining establishments that offer an extraordinary gastronomic experience. 
                                    From innovative fusion cuisine to classic fine dining, each restaurant showcases exceptional craftsmanship and an unwavering commitment to culinary artistry.)</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">@lang(Facilities : )</div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                    <span>Restaurants</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">@lang( "Contact Info ")</span></a></li>
                                        <li><a href="#1" class="single-map-item" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>1</strong></span> </a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '{{ asset('frontend/images/all/1.jpg') }}',{'src': '{{ asset('frontend/images/all/24.jpg') }}'}, {'src': '{{ asset('frontend/images/all/12.jpg') }}'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div> "
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="3"></span>
                                    <span class="price-name-tooltip">@lang( "Pricy ")</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> @lang( "Call :  ")</span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> @lang( "Write : " )</span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!--  gallery-item-->
            <div class="gallery-item events">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>@lang( "Save ")</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="{{ asset('frontend/images/all/9.jpg')}}" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="{{ asset('frontend/images/avatar/2.jpg')}}" alt=""></a>
                                <span class="avatar-tooltip">@lang( "Added By  ") <strong>Mark Rose</strong></span>
                            </div>
                            <div class="geodir_status_date color-bg"><i class="fal fa-clock"></i>27 may 2019</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.2</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                    <br>
                                    <div class="reviews-count">6 @lang( "reviews ")</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap ">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">@lang(Rocko Band in Marquee Club)</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  75 Prince St,  NY, USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">@lang(Explore this category to find trusted companies that excel in their respective fields and are dedicated to delivering excellence at every step)</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">@lang(Facilities : )</div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category purp-bg"><i class="fal fa-cocktail"></i></div>
                                    <span>Events</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">@lang(Contact Info)</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>2</strong></span></a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '{{ asset('frontend/images/all/9.jpg')}}'},{'src': '{{ asset('frontend/images/all/32.jpg')}}'}, {'src': '{{ asset('frontend/images/all/23.jpg')}}'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="4"></span>
                                    <span class="price-name-tooltip">@lang( "Ultra High ")</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i>@lang(  "Call :  ")</span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i>@lang( " Write : ") </span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!-- gallery-item  -->
            <div class="gallery-item fitness">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>@lang( "Save ")</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="{{ asset('frontend/images/all/31.jpg')}}" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="{{ asset('frontend/images/avatar/4.jpg')}}" alt=""></a>
                                <span class="avatar-tooltip">@lang( "Added By " ) <strong>Lisa Smith</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>@lang( "Close Now ")</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">3.8</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                    <br>
                                    <div class="reviews-count">4 @lang( "reviews ")</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">Premium Fitness Gym</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York,  USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">@lang( "Whether you're searching for top-notch fashion brands, cutting-edge technology providers, or unique artisans, our category showcases the very best in each industry. ")</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">@lang( "Facilities :  ")</div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category blue-bg"><i class="fal fa-dumbbell"></i></div>
                                    <span>Fitness / Gym</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">@lang( "Contact Info ")</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.94982541" data-newlongitude="-73.84357452"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>3</strong></span> </a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '{{ asset('frontend/images/all/31.jpg')}}'},{'src': '{{ asset('frontend/images/all/10.jpg')}}'}, {'src': '{{ asset('frontend/images/all/15.jpg')}}'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="2"></span>
                                    <span class="price-name-tooltip">@lang( "Moderate ")</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> @lang( "Call :  ")</span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> @lang( "Write :")</span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div> "
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!-- gallery-item  -->
            <div class="gallery-item hotels">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>@lang( "Save ")</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="{{ asset('frontend/images/all/16.jpg')}}" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="{{ asset('frontend/images/avatar/3.jpg')}}" alt=""></a>
                                <span class="avatar-tooltip">@lang( "Added By  ") <strong>Kliff Antony</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>@lang( "Open Now ")</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">5.0</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <br>
                                    <div class="reviews-count">4 @lang( "reviews ")</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">MontePlaza Hotel</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  70 Bright St New York, USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">@llang( "Discover a world of diverse offerings in our carefully curated category. We have handpicked a wide range of exceptional companies that cater to every need and interest. ")</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">@lang( "Facilities :  ")</div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category  yellow-bg"><i class="fal fa-bed"></i></div>
                                    <span>Hotels</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">@lang( "Contact Info ")</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.72228267" data-newlongitude="-73.99246214"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>4</strong></span></a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '{{ asset('frontend/images/all/16.jpg')}}'},{'src': '{{ asset('frontend/images/all/27.jpg')}}'}, {'src': '{{ asset('frontend/images/all/20.jpg')}}'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="4"></span>
                                    <span class="price-name-tooltip">@lang( "Ultra High ")</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div> "
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i>@lang(  "Call :  ")</span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> @lang( "Write :  ")</span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!-- gallery-item  -->
            <div class="gallery-item hotels">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>@lang( "Save ")</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="{{ asset('frontend/images/all/28.jpg')}}" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="{{ asset('frontend/images/avatar/5.jpg')}}" alt=""></a>
                                <span class="avatar-tooltip">@lang( "Added By")<strong>Nasty Wood</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>@lang( "Open Now ")</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.7</div> "
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <br>
                                    <div class="reviews-count">9 @lang( "reviews ")</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">@lang( "Handmade Shop ")</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  34-42 Montgomery St , NY, USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">@lang(Whether you prefer browsing through bustling boutiques or exploring the convenience of online shopping, our selection of shops ensures that you'll find exactly what you're looking for.)</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">@lang(Facilities : )</div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category green-bg"><i class="fal fa-cart-arrow-down"></i></div>
                                    <span>@lang(Shopping)</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">@lang(Contact Info)</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>5</strong></span> </a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '{{ asset('frontend/images/all/28.jpg')}}'},{'src': '{{ asset('frontend/images/all/29.jpg')}}'}, {'src': '{{ asset('frontend/images/all/30.jpg')}}'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="3"></span>
                                    <span class="price-name-tooltip">@lang(Pricy)</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> @lang(Call : )</span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> @lang(Write : )</span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!-- gallery-item  -->
            <div class="gallery-item  restaurant hotels">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>@lang( "Save ")</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="{{ asset('frontend/images/all/18.jpg')}}" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="{{ asset('frontend/images/avatar/1.jpg')}}" alt=""></a>
                                <span class="avatar-tooltip">@lang( "Added By  ") <strong>Alisa Noory</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_close"><i class="fal fa-lock-open"></i>@lang( "Close Now ")</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.1</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                    <br>
                                    <div class="reviews-count">26 @lang( "reviews ")</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">@lang( "Iconic Cafee in Manhattan ")</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ,  USA</a></div>
                                </div>
                            </div>  "
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">@lang( "Get ready to indulge in a world of retail therapy and unlock an unparalleled shopping journey with us. ")</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">@lang( "Facilities : ") </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                    <span>Restaurants</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">@lang( "Contact Info ")</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.76221766" data-newlongitude="-73.96511769"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>6</strong></span> </a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '{{ asset('frontend/images/all/18.jpg')}}'},{'src': '{{ asset('frontend/images/all/21.jpg')}}'}, {'src': '{{ asset('frontend/images/all/22.jpg')}}'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="2"></span>
                                    <span class="price-name-tooltip">@lang( "Moderate ")</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i>@lang(  "Call : ") </span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> @lang( "Write : ") </span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!-- gallery-item  -->
            <div class="gallery-item fitness">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>@lang( "Save ")</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="{{ asset('frontend/images/all/52.jpg')}}" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="{{ asset('frontend/images/avatar/6.jpg')}}" alt=""></a>
                                <span class="avatar-tooltip">@lang( "Added By   ")<strong>Lisa Smith</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>@lang( "Close Now ")</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.1</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                    <br>
                                    <div class="reviews-count">56 @lang(reviews)</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">BodyStrong Gym</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York,  USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">@lang('From renowned international brands to local artisans, our shops showcase a captivating blend of styles and craftsmanship.')</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">@lang('Facilities :') </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category blue-bg"><i class="fal fa-dumbbell"></i></div>
                                    <span>Fitness / Gym</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">@lang('Contact Info')</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.94982541" data-newlongitude="-73.84357452"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>7</strong></span> </a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '{{ asset('frontend/images/all/10.jpg')}}'},{'src': '{{ asset('frontend/images/all/14.jpg')}}'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="2"></span>
                                    <span class="price-name-tooltip">@lang('Moderate')</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> @lang('Call :' )</span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> @lang('Write : ')</span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
            <!-- gallery-item  -->
            <div class="gallery-item hotels">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>@lang('Save')</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="{{ asset('frontend/images/all/62.jpg')}}" alt="">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="{{ asset('frontend/images/avatar/4.jpg')}}" alt=""></a>
                                <span class="avatar-tooltip">@lang('Added By ' )<strong>@lang('Nasty Wood')</strong></span>
                            </div>
                            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>@lang('Open Now')</div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.7</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <br>
                                    <div class="reviews-count">9 @lang(reviews)</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">@lang(Family Store)</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  34-42 Montgomery St , NY, USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">@lang('We invite you to support these local gems and create cherished memories as you explore the heart and soul of our family store.')</p>
                                <div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">@lang('Facilities :') </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category green-bg"><i class="fal fa-cart-arrow-down"></i></div>
                                    <span>@lang('Shopping')</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">@lang('Contact Info')</span></a></li>
                                        <li><a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>5</strong></span> </a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '{{ asset('frontend/images/all/28.jpg')}}'},{'src': '{{ asset('frontend/images/all/29.jpg')}}'}, {'src': '{{ asset('frontend/images/all/30.jpg')}}'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="3"></span>
                                    <span class="price-name-tooltip">@lang('Pricy')</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> @lang('Call :') </span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i>@lang(' Write :') </span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->
            </div>
            <!-- gallery-item  end-->
        </div>
        <a href="listing.html" class="btn  dec_btn  color2-bg">@lang('Check Out All Listings')<i class="fal fa-arrow-alt-right"></i></a>
    </div>
</section>

