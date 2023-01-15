/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
	theme: {
		extend: {
			fontFamily: {
				'jb-mono': ['JetBrains Mono', 'monospace'],
				'montserrat': ['Montserrat'],
			}
		},
	},
	plugins: [
		require('daisyui'),
	],
	daisyui: {
		styled: true,
		base: false,
		logs: false,
		themes: [
			{
				catMacchiato: {
					"primary": "#a5b4fc",
					"secondary": "#91d7e3",
					"accent": "#99f6e4",
					"neutral": "#181926",
					"base-100": "#24273a",
					"info": "#8aadf4",
					"success": "#a6da95",
					"warning": "#f3a77d",
					"error": "#ee99a0",
				},
				catLatte: {
					"primary": "#38427d",
					"secondary": "#7287fd",
					"accent": "#04a5e5",
					"neutral": "#dce0e8",
					"base-100": "#eef0f4",
					"info": "#1e66f5",
					"success": "#40a02b",
					"warning": "#fe640b",
					"error": "#e64553",
				},
				ricoMono: {
					"primary": "#71bef7",
					"secondary": "#c861e7",
					"accent": "#3b82f6",
					"neutral": "#161412",
					"base-100": "#1c1917",
					"info": "#3ABFF8",
					"success": "#36D399",
					"warning": "#FBBD23",
					"error": "#ef4444",
				},
			},
			"light",
		]
	}
}
