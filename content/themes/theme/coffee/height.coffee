$ ->
  hero = $('.section-hero')
  hero_banner = $('.section-hero-banner')
  
  # Determine heights
  hero_height = window.innerHeight - 100
  
  # Apply heights
  hero.css "height", hero_height
  hero_banner.css "height", hero_height
  
  $(window).on "resize", ->
    
    # Re-determine heights
    hero_height = window.innerHeight - 100
  
    # Re-apply heights
    hero.css "height", hero_height
    hero_banner.css "height", hero_height