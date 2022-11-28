/**
 * Init
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel-Assets
 */

(() => {

  // Slider
  // wp:group.slider で囲んで使用する
  wp.blocks.registerBlockStyle('core/gallery', {
    name: 'slider-items',
    label: 'Slider Items'
  });

  // Modal
  // wp:group.modalItems で囲んで使用する
  wp.blocks.registerBlockStyle('core/gallery', {
    name: 'modal-items',
    label: 'Modal Items'
  });

})();
