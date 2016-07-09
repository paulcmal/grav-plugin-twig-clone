# Grav twig-clone Plugin

twig-clone is a [Grav](https://github.com/getgrav/grav) plugin to copy objects within clone templates, originally implemented for Drupal by [@GroovyCarrot](https://github.com/GroovyCarrot/drupal-twig_clone).

# Features

Allows you to copy an object (so as not to alter the original), from within your Twig template:
```
{% set attributes_copy = clone(attributes) %}
```

# Install

As this plugin has not been included in the Grav repositories yet, you have to install it manually.

From within your plugins directory:
```
git clone https://github.com/paulcmal/grav-plugin-twig-clone
mv grav-plugin-twig-clone twig-clone
```

# Acknowledgements

This Twig extension was originally developped by [@GroovyCarrot](https://github.com/GroovyCarrot/drupal-twig_clone) as a Drupal plugin.

I merely rewrapped his code as a Grav plugin.
