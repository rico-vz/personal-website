import { defineConfig } from 'astro/config';
import vercel from '@astrojs/vercel/serverless';
import mdx from '@astrojs/mdx';
import sitemap from '@astrojs/sitemap';

// https://astro.build/config
import tailwind from "@astrojs/tailwind";

// https://astro.build/config
import compress from "astro-compress";

// https://astro.build/config
import critters from "astro-critters";

// https://astro.build/config

// https://astro.build/config
export default defineConfig({
  site: 'https://ricovz.me',
  integrations: [mdx(), sitemap(), tailwind(), compress(), critters()],
  output: 'server',
  adapter: vercel()
});