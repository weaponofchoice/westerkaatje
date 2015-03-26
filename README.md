Monomark OnePage
==============================

This is a Wordpress framework, used for basic Monomark onepagers. It contains a wordpress setup with a multiple server config method and wordpress as a submodule. It also has a basic wordpres theme. It contains elements like a gallery, grid, text block and more. To make it even easier, there's also an ACF export file so you don't have to manually add these with every install.

Although this framework is initially build for onepagers, of course it can easily be used to make larger websites.

## Classnaming & writing sass

### Classnames

.block_kind-variation 
  .has_no-something
  .has-something
  .has_something-otherthing (example: .has_background-dark)
  
  .is_not-something
  .is-something
  .is_something-otherthing (example: .is_aligned-center)
  
### Sass guidelines

- One selector per line
- Single space before opening bracket
- Extends come first
- Includes come second
- Then the rest in three blocks: positioning, display & box model and other
- Use 2 soft tabs(spaces)
- 

.selector-1,
.selector-2 {
  @extend something;
  @include mixin();
  @include another-mixin();
  
  /* Positioning */
  position: absolute;
  z-index: 10;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;

  /* Display & Box Model */
  display: inline-block;
  overflow: hidden;
  box-sizing: border-box;
  width: 100px;
  height: 100px;
  padding: 10px;
  border: 10px solid #333;
  margin: 10px;

  /* Other */
  background: #000;
  color: #fff;
  font-family: sans-serif;
  font-size: 16px;
  text-align: right;
}