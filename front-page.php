<?php get_header(); ?>
<div id='container' class="group">
	<div id="posts" class="left-col">
		<?php 
			$posts= get_posts('posts_per_page=3');
			foreach ($posts as $post) :  setup_postdata($post); 
		?>			
				<div class="post group">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="byline">by <?php the_author_posts_link(); ?> on <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a></div>
					<p><?php the_excerpt(); ?></p>
				</div>
			<?php endforeach; ?>		
	</div>
<!--Shopify -->
	<div id='product-component-bb742acbe4a'></div>
<script type="text/javascript">
/*<![CDATA[*/

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'el-tablero-de-otto.myshopify.com',
      apiKey: 'f71e56fbf55b89b0db996ad742f7caf8',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: [8679881552],
        node: document.getElementById('product-component-bb742acbe4a'),
        moneyFormat: 'S%2F.%20%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "variantId": "all",
    "width": "380px",
    "contents": {
      "imgWithCarousel": false,
      "variantTitle": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "text": {
      "button": "COMPRAR"
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#578cb6",
        ":hover": {
          "background-color": "#4e7ea4"
        },
        ":focus": {
          "background-color": "#4e7ea4"
        }
      },
      "compareAt": {
        "font-size": "12px"
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "styles": {
      "button": {
        "background-color": "#578cb6",
        ":hover": {
          "background-color": "#4e7ea4"
        },
        ":focus": {
          "background-color": "#4e7ea4"
        }
      },
      "footer": {
        "background-color": "#ffffff"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#578cb6",
        ":hover": {
          "background-color": "#4e7ea4"
        },
        ":focus": {
          "background-color": "#4e7ea4"
        }
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#578cb6",
        ":hover": {
          "background-color": "#4e7ea4"
        },
        ":focus": {
          "background-color": "#4e7ea4"
        }
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  }
}
      });
    });
  }
})();
/*]]>*/
</script>

</div>
<?php get_footer(); ?>