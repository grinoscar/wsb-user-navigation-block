/**
 * WordPress dependencies
 */
import { store, getContext } from '@wordpress/interactivity';

const { state } = store('wsb-user-navigation-block', {
	state: {
		get themeText() {
			return state.isDark ? state.darkText : state.lightText;
		},
	},
	actions: {
	},
	callbacks: {
	},
});
