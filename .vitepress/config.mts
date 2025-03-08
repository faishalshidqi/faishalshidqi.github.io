import { defineConfig } from 'vitepress'

// https://vitepress.dev/reference/site-config
export default defineConfig({
  title: "Faishal Shidqi's Portfolio",
  description: "Application Development and Cloud Engineering",
  themeConfig: {
    // https://vitepress.dev/reference/default-theme-config
    nav: [
      { text: 'Home', link: '/' },
      { text: 'About', link: '/about' },
      { text: 'Blogs', link: '/blog' },
    ],

    sidebar: [
      {
        text: 'Web Development',
        items: [
          { text: 'Web Backend Engineering', link: '/backend' },
          { text: 'Web Frontend Engineering', link: '/frontend' }
        ]
      },
      {
        text: 'Blogs',
        items: [
          {text: 'HackTheBox UnderPass Writeup', link: '/blog/underpass_htb' },
        ]
      }
    ],

    socialLinks: [
      { icon: 'github', link: 'https://github.com/faishalshidqi' },
      { icon: 'linkedin', link: 'https://www.linkedin.com/in/muhammad-faishal-shidqi/' },
    ]
  }
})
