<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package who
 * Template name:productpage
 */

get_header();
?>
<main id="primary" class="site-main">
<script>
function show_result(str) {
  if (str.length==0) { 
    document.getElementById("live_search").innerHTML="";
    document.getElementById("live_search").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
// script for browser version above IE 7 and the other popular browsers (newer browsers)
    xmlhttpreq=new XMLHttpRequest();
  } else { 
// script for the IE 5 and 6 browsers (older versions)
    xmlhttpreq=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpreq.onreadystatechange=function() {
//check if server response is ready  
    if (this.readyState==4 && this.status==200) {
      document.getElementById("live_search").innerHTML=this.responseText;
      document.getElementById("live_search").style.border="1px solid #A5ACB2";
    }
  }

  xmlhttpreq.open("GET","/learn/livesearch.php?q="+str,true);
  xmlhttpreq.send();
}
</script>

    <body id="product-page">

    <?php
    $banner = get_field('banner');
    if ($banner): ?>
        <div class="product-banner-img"
            style="background-image:url('<?php echo esc_url($banner['image']['url']); ?>')">
            <h1><?php echo $banner['title']; ?></h1>
        </div>
        <?php endif ?>
        

<!-- --------------------------------------------------------------------------------- -->

        <div class="borderLine">
        </div>

        <div class="curved-product-bg"
            style="background-image:url('<?php bloginfo("template_directory");?>/img/curvedBgProduct.png">
            <p><?php the_field ('slogan'); ?></p>
            <label class="screen-reader-text" for="s">Search for:</label>
            <input type="text" name="s" placeholder="Search Products" class="search-bar" onkeyup="show_result(this.value)">
            <div class="filter-buttons">
                <p style="padding-top:9px">Filter By:</p>
                <div><button>Bone & Joint</button></div>
                <div><button>Foundational</button></div>
                <div><button>Heart Health</button></div>
                <div><button>Immune</button></div>
                <div><button>Men’s Health</button></div>
                <div><button>Sleep</button></div>
                <div><button>Vision</button></div>
                <div><button>Women’s Health</button></div>
            </div>
        </div>
        <div class="all-products">
        
            <div class="live_search">
                  <div class="product-hover"
                  style="background-image:url('<?php bloginfo("template_directory");?>/img/productHover.jpg"> 
                  <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/B12product.png" />        
</div>
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">14 Reviews</span>
                </div>
                <h2>B12</h2>
                <p class="product-text">Mood-boosting and blood-building vitamin B12 is an essential nutrient
                    that...</p>
            </div>
            <div class="live_search">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/coQ10Product.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">
                        84 Reviews</span>
                </div>
                <h2>COQ10</h2>
                <p class="product-text">Show your heart some love at the cellular level with highly absorbable,...
                </p>
            </div>
            <div class="live_search">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/D3+K2product.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">67 Reviews</span>
                </div>
                <h2>D3 + K2</h2>
                <p class="product-text">WHOLISTICs D3 + K2 provides two essential bone-building nutrients in one...
                </p>
            </div>
            <div class="live_search">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/D3100product.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="review">114 Reviews</span>
                </div>
                <h2>D3 1000 IU</h2>
                <p class="product-text">Vitamin D3 is a hardworking nutrient, performing various jobs in your
                    body....</p>
            </div>
            <div class="live_search">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/D32500UIproduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">57 Reviews</span>
                </div>
                <h2>D3 2500 IU</h2>
                <p class="product-text">Do your vitamin D3 levels need a boost? D3 2500IU packs a potent punch of
                    the...</p>
            </div>
            <div class="live_search">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/folicAcidProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">105 Reviews</span>
                </div>
                <h2>FOLIC ACID</h2>
                <p class="product-text">Folic acid is extremely important for your health, especially during...</p>

            </div>

            <div class="live_search">

                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/K2product.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">51 Reviews</span>
                </div>
                <h2>K2</h2>
                <p class="product-text">Strong bones protect your internal organs and provide support for your...
                </p>
            </div>
            <div class="live_search">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/luteinProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">36 Reviews</span>
                </div>
                <h2>LUTEIN + ZEAXANTHIN</h2>
                <p class="product-text">We all want to keep our eyes as healthy as possible for as long as
                    possible,...</p>
            </div>
            <div class="live_search">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/lycopeneProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="review">9 Reviews</span>
                </div>
                <h2>LYCOPENE+</h2>
                <p class="product-text">Prostate conditions become increasingly common as men age, with up to 90%
                    of...</p>
            </div>
            <div class="live_search">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/magnesiumProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">33 Reviews</span>
                    <h2>MAGNESIUM CITRATE</h2>
                    <p class="product-text">Magnesium is one of the most important minerals in the body. This
                        particular...</p>
                </div>
            </div>
            <div class="live_search">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/magnesiumProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">14 Reviews</span>
                </div>
                <h2>MELATONIN + GABA</h2>
                <p class="product-text">Fall asleep and stay asleep with this dreamy duo. Sleep deficiency is
                    often...</p>
            </div>
            <div class="live_search">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/omega3Product.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">48 Reviews</span>
                </div>
                <h2>OMEGA 3</h2>
                <p class="product-text">The oh-so-mighty Omega-3 provides high-potency EPA and DHA to help
                    support...</p>
            </div>
            <div class="live_search">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/tumericProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">85 Reviews</span>
                </div>
                <h2>TURMERIC</h2>
                <p class="product-text">Turmeric has traditionally been used in herbal medicine to reduce...</p>
            </div>
            <div class="live_search">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/zincProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">24 Reviews</span>
                </div>
                <h2>ZINC+C</h2>
                <p class="product-text">WHOLISTICs Zinc+C delivers key immunity-supporting nutrients to keep
                    your...</p>
            </div>
        </div>



    </body>
</main><!-- #main -->
<?php
get_footer();