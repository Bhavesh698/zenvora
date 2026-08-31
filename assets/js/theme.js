/**
 * Zenvora front-end behaviour.
 * Deliberately tiny: the Navigation block already handles the responsive
 * menu, so this only wires up the "Popular Products" tab switcher pattern.
 */
( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {
		var tabGroups = document.querySelectorAll( '[data-zv-tabs]' );

		tabGroups.forEach( function ( group ) {
			var buttons = group.querySelectorAll( '.zv-tab-btn' );
			var target = group.getAttribute( 'data-zv-tabs' );
			var panels = document.querySelectorAll(
				'[data-zv-tab-panel="' + target + '"] .zv-tab-panel'
			);

			buttons.forEach( function ( button ) {
				button.addEventListener( 'click', function () {
					var tabKey = button.getAttribute( 'data-tab' );

					buttons.forEach( function ( b ) {
						b.classList.toggle( 'is-active', b === button );
						b.setAttribute( 'aria-selected', b === button ? 'true' : 'false' );
					} );

					panels.forEach( function ( panel ) {
						panel.classList.toggle(
							'is-active',
							panel.getAttribute( 'data-tab-panel' ) === tabKey
						);
					} );
				} );
			} );
		} );
	} );
} )();
