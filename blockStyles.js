/**
 * Init
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel-Assets
 */

((wp) => {
  console.log('Hello block styles!');

  wp.blocks.registerBlockStyle('core/quote', {
    name: 'qwel-custom',
    label: 'Qwel Custom'
  });

})(wp);
