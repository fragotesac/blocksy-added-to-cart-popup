# FraGoTe Blocksy AutoOpenClose Cart Added Cart

**Automatically opens and closes the mini cart preview in the Blocksy header when a product is added via WooCommerce AJAX.**

![WooCommerce + Blocksy Preview](https://user-images.githubusercontent.com/your-screenshot.png) <!-- Opcional si agregas imagen -->

---

## 🔧 Description

This lightweight plugin enhances the UX of WooCommerce stores using the Blocksy theme by:

- Automatically focusing (`.focus()`) the `.ct-cart-item` cart icon when a product is added to the cart via AJAX
- Automatically blurring (`.blur()`) it after 3 seconds to close the mini cart

No configuration needed. Just install and activate.

---

## 🚀 Features

- ✅ Compatible with **WooCommerce** and **Blocksy**
- ✅ Works out of the box with AJAX "Add to Cart"
- ✅ Auto-opens and auto-closes mini cart preview
- ✅ Lightweight and dependency-free

---

## 🧩 Installation

1. Download or clone this repository.
2. Copy the plugin folder to your `/wp-content/plugins/` directory.
3. Activate the plugin in your WordPress admin panel under **Plugins**.
4. Done! The mini cart will auto open/close when products are added.

---

## 📦 How it Works

The plugin listens to the WooCommerce `added_to_cart` event and applies:

```js
document.querySelector('.ct-cart-item').focus();

setTimeout(() => {
  document.querySelector('.ct-cart-item').blur();
}, 3000)

```

---

## ❓ FAQ

Will it work on product detail pages?

No. This works only with AJAX-enabled add-to-cart buttons, usually on shop or archive pages.

Can I change the timeout?

In this version, the timeout is hardcoded to 3 seconds, but you can easily change the number in the plugin file or request a feature.

---

## 🛠 Requirements
- WordPress 5.0+
- WooCommerce 4.0+
- Blocksy Theme (Free or Pro)
- PHP 7.2+

---

## 💼 Author

FraGoTe Software Factory Expertos en soluciones a medida, inteligencia artificial y desarrollo web de alto rendimiento.

🌐 www.fragote.com

📧 support@fragote.com


