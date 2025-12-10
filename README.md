<p align="center">
  <img src=".branding/tabarc-icon.svg" width="180" alt="TABARC-Code Icon">
</p>

# WP Admin Focus Mode

This plugin lets me put specific roles into a simplified version of the WordPress admin.

The idea is to give clients and non technical users a calmer environment. Fewer menu items, fewer scary options, less chance of "I clicked something and everything is broken now".

I still keep full control as an admin. Focus mode only touches the users and roles I choose.

## What it does

When focus mode is enabled for a role:

- The left admin menu is trimmed to a list I define.
- The user can still reach their profile page.
- Optional: the user is redirected to a specific landing page after login.
- Optional: the top "Screen Options" and "Help" tabs are hidden.
- Optional: some admin bar items are removed to quiet the interface.

Admins and any role without focus mode stay untouched.

## Features at a glance

- Per role toggle for focus mode.
- Optional per role login landing page.
- Simple interface to pick which admin menu items stay visible.
- Profile page is always accessible.
- Optional "chrome cleanup" for:
  - Screen options
  - Help tabs
  - WordPress logo and a couple of admin bar items.

It does not try to replace the admin. It just trims it.

## Requirements

- WordPress 5.0 or newer.
- PHP 7.4 or newer is recommended.
- Any user roles you want to manage must already exist.

## Installation

1. Clone or download this repository.

   ```bash
   git clone https://github.com/TABARC-Code/wp-admin-focus-mode.git
