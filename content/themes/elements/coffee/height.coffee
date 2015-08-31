$ ->
  hero = $('.section-hero')
  hero_banner = $('.section-hero-banner')
  header = $('header')
  main = $('main')

  # Determine heights
  hero_height = window.innerHeight - 100
  header_height = header.height() - 1

  # Apply heights
  hero.css "height", hero_height
  hero_banner.css "height", hero_height
  main.css "padding-top", header_height

  $(window).on "resize", ->

    # Re-determine heights
    hero_height = window.innerHeight - 100
    header_height = header.height() - 1

    # Re-apply heights
    hero.css "height", hero_height
    hero_banner.css "height", hero_height
    main.css "padding-top", header_height
