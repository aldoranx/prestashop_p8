@reset-database-before-feature
Feature: Cart rule (percent) calculation with one cart rule restricted to not already discounted product
  As a customer
  I must be able to have correct cart total when adding cart rules

  Scenario: multiple products in cart, several quantities, one 50% cartRule excluding already discounted
    Given I have an empty default cart
    Given shop configuration for "PS_CART_RULE_FEATURE_ACTIVE" is set to 1
    Given there is a product in the catalog named "product1" with a price of 19.812 and 1000 items in stock
    Given product "product1" has a specific price named "specificPrice1" with an amount discount of 3.0
    Given there is a product in the catalog named "product2" with a price of 32.388 and 1000 items in stock
    Given there is a product in the catalog named "product3" with a price of 31.188 and 1000 items in stock
    Given there is a cart rule named "cartrule10" that applies a percent discount of 50.0% with priority 10, quantity of 1000 and quantity per user 1000
    Given cart rule "cartrule10" does not apply to already discounted products
    Given cart rule "cartrule10" has a discount code "foo10"
    When I add 2 items of product "product2" in my cart
    When I add 3 items of product "product1" in my cart
    When I add 1 items of product "product3" in my cart
    When I use the discount "cartrule10"
    Then my cart total should be 105.418 tax included
    # Test known not to be reliable on previous
    # Then my cart total using previous calculation method should be 105.418 tax included

  Scenario: multiple products in cart, several quantities, one 50% cartRule on selected product excluding already discounted
    Given I have an empty default cart
    Given shop configuration for "PS_CART_RULE_FEATURE_ACTIVE" is set to 1
    Given there is a product in the catalog named "product1" with a price of 19.812 and 1000 items in stock
    Given product "product1" has a specific price named "specificPrice1" with an amount discount of 3.0
    Given there is a product in the catalog named "product2" with a price of 32.388 and 1000 items in stock
    Given there is a product in the catalog named "product3" with a price of 31.188 and 1000 items in stock
    Given there is a cart rule named "cartrule11" that applies a percent discount of 50.0% with priority 10, quantity of 1000 and quantity per user 1000
    Given cart rule "cartrule11" is restricted to product "product1"
    Given cart rule "cartrule11" is restricted to product "product2"
    Given cart rule "cartrule11" does not apply to already discounted products
    Given cart rule "cartrule11" has a discount code "foo10"
    When I add 2 items of product "product2" in my cart
    When I add 3 items of product "product1" in my cart
    When I add 1 items of product "product3" in my cart
    When I use the discount "cartrule11"
    Then my cart total should be 121.000 tax included
    # Test known not to be reliable on previous
    # Then my cart total using previous calculation method should be 121.000 tax included
