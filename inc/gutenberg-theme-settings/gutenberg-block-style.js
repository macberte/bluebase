/* Blockquote
-----------------------------------------*/

// wp.blocks.registerBlockStyle( 'core/quote', {
//   name: 'fancy-quote',
//   label: 'Fancy Quote',
// } );

/* Unregister default style block
-----------------------------------------*/
wp.domReady(() => {
  wp.blocks.unregisterBlockStyle('core/button', 'fill')
  wp.blocks.unregisterBlockStyle('core/button', 'outline')
})

/* Button
-----------------------------------------*/
wp.blocks.registerBlockStyle('core/button', {
  name: 'btn-second', //classe
  label: 'Secondo', //nome back-end
})

wp.blocks.registerBlockStyle('core/button', {
  name: 'btn-third',
  label: 'Terzo',
})

/* heading
-----------------------------------------*/
wp.blocks.registerBlockStyle('core/heading', {
  name: 'overline',
  label: 'Overline',
})
wp.blocks.registerBlockStyle('core/heading', {
  name: 'underline',
  label: 'Underline',
})

/* List
-----------------------------------------*/
wp.blocks.registerBlockStyle('core/list', {
  name: 'check',
  label: 'Check',
})

/* restituisce in console tutti i blocchi registrati
-----------------------------------------*/
// wp.domReady(() => {
//     // find blocks styles
//     wp.blocks.getBlockTypes().forEach((block) => {
//         if (_.isArray(block['styles'])) {
//             console.log(block.name, _.pluck(block['styles'], 'name'));
//         }
//     });
// });
