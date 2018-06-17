<<<<<<< HEAD
<hr class="section-separator">
<section id="clients" class="group">
	<div id='product-component-9df96ffbcec'></div>
=======
<section id="products">
  <div id='product-component-7746d6cb99c'></div>
>>>>>>> origin/master
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
<<<<<<< HEAD
      domain: 'eltablerodeotto.myshopify.com',
      apiKey: 'de52c9e4da9235035c92435eb2ea5f6e',
=======
      domain: 'wildog.myshopify.com',
      apiKey: '270afc9d274484966a03c5dd9265e414',
>>>>>>> origin/master
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
<<<<<<< HEAD
        id: [8867157515],
        node: document.getElementById('product-component-9df96ffbcec'),
=======
        id: [8900677713],
        node: document.getElementById('product-component-7746d6cb99c'),
>>>>>>> origin/master
        moneyFormat: 'S%2F.%20%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "variantId": "all",
    "contents": {
      "imgWithCarousel": false,
      "variantTitle": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px"
        }
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "styles": {
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
<<<<<<< HEAD
=======
<div id='collection-component-a925776bdfa'></div>
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
      domain: 'wildog.myshopify.com',
      apiKey: '270afc9d274484966a03c5dd9265e414',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('collection', {
        id: 417131921,
        node: document.getElementById('collection-component-a925776bdfa'),
        moneyFormat: 'S%2F.%20%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "variantId": "all",
    "contents": {
      "imgWithCarousel": false,
      "variantTitle": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "text": {
      "button": "Hacerlo Feliz"
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#ffcb05",
        "color": "#000000",
        ":hover": {
          "background-color": "#e6b705",
          "color": "#000000"
        },
        "border-radius": "5px",
        ":focus": {
          "background-color": "#e6b705"
        },
        "font-weight": "bold"
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "text": {
      "title": "Carito",
      "button": "Finalizar Compra",
      "empty": "Tu carrito esta vacío"
    },
    "styles": {
      "button": {
        "background-color": "#ffcb05",
        "color": "#000000",
        ":hover": {
          "background-color": "#e6b705",
          "color": "#000000"
        },
        "border-radius": "5px",
        ":focus": {
          "background-color": "#e6b705"
        },
        "font-weight": "bold"
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
        "background-color": "#ffcb05",
        "color": "#000000",
        ":hover": {
          "background-color": "#e6b705",
          "color": "#000000"
        },
        "border-radius": "5px",
        ":focus": {
          "background-color": "#e6b705"
        },
        "font-weight": "bold"
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#ffcb05",
        ":hover": {
          "background-color": "#e6b705"
        },
        ":focus": {
          "background-color": "#e6b705"
        },
        "font-weight": "bold"
      },
      "count": {
        "color": "#000000",
        ":hover": {
          "color": "#000000"
        }
      },
      "iconPath": {
        "fill": "#000000"
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
>>>>>>> origin/master
</section>