/**
 * Init
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel-Assets
 */

((wp) => {

  // 引用
  wp.blocks.registerBlockStyle('core/quote', {
    name: 'qwel-custom',
    label: 'Qwel Custom'
  });

  // テーブル
  wp.blocks.registerBlockStyle('core/table', {
    name: 'qwel-custom',
    label: 'Qwel Custom'
  });

})(wp);
