<?php
/**
 * @package WordPress
 * @subpackage littlepad(html5)
 */
?>
<!-- / .l-content --></div>

<footer>
  <div class="l-footer">
    <div class="l-footer__body">
      <div class="l-footer__content l-footer__content--about">
        <div class="m-footer-content">
          <div class="m-footer-content__head">about</div>
          <div class="m-footer-content__body">ハンドルネーム：littlepad<br>都内で WEB 制作（デザイン, html/css, Flash, MT, WordPress etc）をしているBOØWY研究家</div>
        </div>
      </div>
      <div class="l-footer__content l-footer__content--category">
        <div class="m-footer-content">
          <div class="m-footer-content__head">category</div>
          <div class="m-footer-content__body">
            <div class="l-category-list">
              <ul>
                <?php wp_list_categories('title_li='); ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="l-footer__content l-footer__content--search-archive">
        <div class="l-footer__search">
          <div class="m-footer-content">
            <div class="m-footer-content__head">search</div>
            <div class="m-footer-content__body">
              <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
                <div class="l-search">
                  <input type="text" name="s" id="s"><br>
                  <input type="submit" value="<?php esc_attr_e('Search'); ?>">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="l-footer__archive">
          <div class="m-footer-content">
            <div class="m-footer-content__head">archive</div>
            <div class="m-footer-content__body">
              <div class="l-archive">
                <select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
                  <option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
                  <?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="l-footer__foot"><small>&copy;littlepad</small></p>
  </div>
</footer>

<!-- / .l-container --></div>
</body>
</html>
