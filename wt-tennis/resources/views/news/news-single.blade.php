@extends('layouts.app')

@section('content')
 <section class="drawer">
  <div class="col-md-12 size-img back-img-shop">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best news ATP WTP</h3>
      <p class="txt-advert-sub">News - Match - Player</p>
    </div>
  </div>
  <section id="single_news" class="container secondary-page">
    <div class="general general-results">
     <div class="top-score-title col-md-9">
      <h3>{!! $news->judul !!}<span class="point-little">.</span></h3>
      <div class="col-md-4">
        <img class="img-djoko" src="{!! asset('').'/'.$news->thumbnail !!}" alt="" />
      </div>
      <div class="data-news-pg">
        <p>{!! $news->deskripsi !!}</p>
      </div>
      <p class="desc_news important_news data">by {{ $news->author }}<i class="fa fa-calendar"></i>{{ $news->created_at }} - Depok, Indonesia</p>
          <div class="tab_news">
          @unless ($news->tags->isEmpty())
            <i class="fa fa-tag"></i><span>TAGS:</span>
              @foreach ($news->tags as $tag)
                <a href="#" class="tag">{{ $tag->nama }}</a>
              @endforeach
          @endunless
          </div>

          <div class="other-news">
           <h3>Other <span>News</span><span class="point-little">.</span></h3>
           <ul id="product" class="bxslider">
            <li>
              <img src="http://placehold.it/270x180" alt="" />
              <p class="product-title">Europe Tour</p>
              <p class="txt-other-news">It normally takes a great of deal time and effort to defeat No. 26 Gilles Simon, largely due to his counterpunching style of play and impressive foot speed.</p>
              <div><a href="single_news.html" class="ready-news" style="height:52px">Read</a></div>
            </li>
            <li>
              <img src="http://placehold.it/270x180" alt="" />
              <p class="product-title">London Cup</p>
              <p class="txt-other-news">It normally takes a great of deal time and effort to defeat No. 26 Gilles Simon, largely due to his counterpunching style of play and impressive foot speed.</p>
              <div><a href="single_news.html" class="ready-news">Read</a></div>
            </li>
            <li>
              <img src="http://placehold.it/270x180" alt="" />
              <p class="product-title">ATP World</p>
              <p class="txt-other-news">It normally takes a great of deal time and effort to defeat No. 26 Gilles Simon, largely due to his counterpunching style of play and impressive foot speed.</p>
              <div><a href="single_news.html" class="ready-news">Read</a></div>
            </li>
            <li>
              <img src="http://placehold.it/270x180" alt="" />
              <p class="product-title">WPT World</p>
              <p class="txt-other-news">It normally takes a great of deal time and effort to defeat No. 26 Gilles Simon, largely due to his counterpunching style of play and impressive foot speed.</p>
              <div><a href="single_news.html" class="ready-news">Read</a></div>
            </li>
            <li>
              <img src="http://placehold.it/270x180" alt="" />
              <p class="product-title">Russian</p>
              <p class="txt-other-news">It normally takes a great of deal time and effort to defeat No. 26 Gilles Simon, largely due to his counterpunching style of play and impressive foot speed.</p>
              <div><a href="single_news.html" class="ready-news">Read</a></div>
            </li>
            <li>
              <img src="http://placehold.it/270x180" alt="" />
              <p class="product-title">Africa Tour</p>
              <p class="txt-other-news">It normally takes a great of deal time and effort to defeat No. 26 Gilles Simon, largely due to his counterpunching style of play and impressive foot speed.</p>
              <div><a href="single_news.html" class="ready-news">Read</a></div>
            </li>
            
          </ul>
        </div>

        <div class="top-score-title l-comment">
          <h3>LEAVE A <span>COMMENT</span><span class="point-little">.</span></h3>
          <div class="col-md-12 login-page">
            <form method="post" class="register-form">         

              <div class="name">
                <label for="name">* Name:</label><div class="clear"></div>
                <input id="Text2" name="name" type="text" placeholder="e.g. Mr. John" required=""/>
              </div>
              <div class="name">
                <label for="email">* Email:</label><div class="clear"></div>
                <input id="email" name="email" type="text" placeholder="e.g. Mr. Doe" required=""/>
              </div>
              <div class="message">
                <label for="message"> Message:</label>
                <textarea name="messagetext" class="txt-area" id="message" cols="30" rows="4"></textarea>
              </div>
              <div id="register-submit">
                <input type="submit" value="Submit"/>
              </div>
            </form>
            
          </div>
          
        </div><!--Close comment-->
        
      </div><!--Close Top Match-->
      <div class="col-md-3 right-column">
       <div class="top-score-title col-md-12 right-title">
        <h3>Latest News</h3>
        <div class="right-content">
          <p class="news-title-right">A New Old Life</p>
          <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
          <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>
        </div>
        <div class="right-content">
          <p class="news-title-right">A New Old Life</p>
          <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
          <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>
        </div>
        <div class="right-content">
          <p class="news-title-right">A New Old Life</p>
          <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
          <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>
        </div>
      </div>
      <div class="top-score-title col-md-12">
        <img src="http://placehold.it/1000x475" alt="" />
      </div>
      <div class="top-score-title col-md-12 right-title">
        <h3>Photos</h3> 
        <ul class="right-last-photo">
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section id="sponsor" class="container">
    <!--SECTION SPONSOR-->
    <div class="client-sport client-sport-nomargin">
     <div class="content-banner">
       <ul class="sponsor second">
        <li><img src="http://placehold.it/273x133" alt="" /></li>
        <li><img src="http://placehold.it/273x133" alt="" /></li>
        <li><img src="http://placehold.it/273x133" alt="" /></li>
        <li><img src="http://placehold.it/273x133" alt="" /></li>
        <li><img src="http://placehold.it/273x133" alt="" /></li>
        <li><img src="http://placehold.it/273x133" alt="" /></li>
      </ul>
    </div>
  </div>
</section>
<script src="js/jquery.bxslider.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        "use strict";
        if (document.body.clientWidth < 400) {
            $('#product').bxSlider({
                minSlides: 1,
                maxSlides: 3,
                slideWidth: 300,
                slideMargin: 10
            });
        }
        else if (document.body.clientWidth < 600) {
            $('#product').bxSlider({
                minSlides: 2,
                maxSlides: 3,
                slideWidth: 265,
                slideMargin: 10
            });
        }
        else {
            $('#product').bxSlider({
                minSlides: 3,
                maxSlides: 3,
                slideWidth: 265,
                slideMargin: 10
            });
         }
    });
</script>
@endsection
