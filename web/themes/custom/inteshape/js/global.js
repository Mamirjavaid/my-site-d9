/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.inteshape = {
    attach: function (context, settings) {

      $('#coustom-slider .block-views .view-slick-slider .view-content').slick();

    }
  };

})(Drupal);
