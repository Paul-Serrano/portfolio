# Portfolio Website - Copilot Instructions

## Project Goal

Build a premium single-page portfolio website for a Backend Developer specialized in PHP, Laravel, and Symfony.

The website should look like a modern SaaS landing page rather than a traditional CV.

Target audience:

* Recruiters
* Engineering Managers
* CTOs
* Potential clients

The website must clearly communicate technical expertise, professional experience, and project impact.

---

# Tech Stack

## Required

* Laravel 12
* PHP 8.4+
* Blade Components
* Livewire 3
* Tailwind CSS 4
* Alpine.js (only if necessary)

## Deployment

* Render

## Content Management

Do NOT use a database.

All content must be stored in configuration files.

Example:

```php
config/portfolio.php
```

This file will contain:

* Personal information
* Experiences
* Skills
* Projects
* Contact links
* Statistics

The application should be fully content-driven through configuration.

---

# Design Direction

## Inspiration

The design should be inspired by:

* Laravel
* Vercel
* Stripe
* Linear
* Raycast

## Visual Style

* Dark theme
* Premium SaaS appearance
* Modern typography
* Large spacing
* Minimalist layout
* Strong visual hierarchy
* Professional and technical

Avoid:

* Overly creative layouts
* Cartoon styles
* Excessive animations
* CV-style appearance

---

# Color Palette

## Background

```css
#0F172A
```

## Surface

```css
#1E293B
```

## Primary Accent

```css
#8B5CF6
```

## Text

```css
#F8FAFC
```

## Secondary Text

```css
#94A3B8
```

---

# Website Sections

The website is a single-page application with smooth scrolling navigation.

Sections order:

1. Hero
2. About
3. Experience
4. Featured Projects
5. Case Studies
6. Technical Stack
7. Statistics
8. Contact

---

# Navigation

Sticky top navigation.

Menu items:

* About
* Experience
* Projects
* Skills
* Contact

Desktop:

Horizontal menu.

Mobile:

Hamburger menu.

Smooth scrolling between sections.

---

# Hero Section

Full viewport height.

## Main Headline

Backend Developer specialized in Laravel & Symfony

## Subtitle

I build scalable, maintainable and business-oriented web applications.

## Call To Actions

Primary button:

View Projects

Secondary button:

Download Resume

## Hero Content

Display:

* Name
* Job title
* Short introduction

Include a modern developer visual:

* Developer illustration
* Abstract code pattern
* Terminal-inspired element

Avoid stock photos.

---

# About Section

Purpose:

Introduce the developer.

Content should highlight:

* 4+ years of PHP development
* Laravel expertise
* Symfony expertise
* PostgreSQL
* Docker
* API integrations
* SOLID principles
* Hexagonal Architecture
* Project ownership
* Freelance experience

Layout:

Two columns on desktop.

Single column on mobile.

---

# Experience Section

Display a vertical timeline.

Each experience contains:

* Company
* Role
* Duration
* Description
* Technologies
* Key achievements

Experiences:

## Freelance

### Service Vin

Technologies:

* Laravel
* PostgreSQL
* Stripe API
* FedEx API
* Docker

Responsibilities:

* Internal business application development
* API integrations
* Business process automation

## Reflectiv

Technologies:

* Symfony
* Prestashop
* PHP
* PostgreSQL

Highlights:

* Hexagonal Architecture
* Maintainable backend systems
* E-commerce development

## Agency Experience

Technologies:

* PHP
* Web Development

## Training & Bootcamp

Backend development training.

---

# Featured Projects

Display as responsive cards.

Each project card contains:

* Title
* Description
* Technologies
* Key challenge
* Outcome

Use hover effects.

Modern card design.

---

# Case Studies

This section is extremely important.

Each case study follows this structure:

## Problem

Describe the business challenge.

## Solution

Explain the implemented solution.

## Architecture

Describe technical decisions.

## Result

Present measurable outcomes.

Create case studies for:

### Service Vin

Topics:

* Stripe integration
* FedEx integration
* Data imports
* Business automation

### Reflectiv

Topics:

* Symfony architecture
* Prestashop customization
* Hexagonal architecture

The goal is to demonstrate engineering thinking.

---

# Technical Stack

Display technologies grouped by category.

## Backend

* PHP
* Laravel
* Symfony

## Database

* PostgreSQL
* MySQL

## Frontend

* Tailwind CSS
* Livewire
* React
* Angular

## DevOps

* Docker
* Git
* Linux

## Architecture

* SOLID
* DDD
* Hexagonal Architecture
* API Design

Use modern badges or chips.

---

# Statistics Section

Display metrics.

Examples:

* 4+ Years Experience
* 10+ Projects Delivered
* Laravel Specialist
* Freelance & Agency Experience

Use animated counters.

Keep animations subtle.

---

# Contact Section

Simple and professional.

Display:

* Email
* GitHub
* LinkedIn

Final CTA:

Let's build something great together.

Optional:

Contact form using Laravel validation.

No database storage required.

Email sending only.

---

# Components

Create reusable Blade components for:

* Section Container
* Section Title
* Project Card
* Experience Card
* Timeline Item
* Skill Badge
* Statistic Card
* CTA Button

Keep components highly reusable.

---

# Animations

Use subtle animations only.

Examples:

* Fade-in on scroll
* Smooth scrolling
* Card hover transitions
* Timeline reveal

Avoid excessive motion.

The website must remain professional.

---

# Performance Requirements

Target Lighthouse score:

95+

Requirements:

* Lazy-loaded images
* Optimized assets
* Minimal JavaScript
* Server-side rendering
* Responsive images

---

# SEO Requirements

Implement:

* Meta title
* Meta description
* Open Graph tags
* Twitter Cards
* Structured Data
* Sitemap
* Robots.txt

---

# Accessibility

Follow WCAG best practices.

Requirements:

* Semantic HTML
* Proper heading hierarchy
* Keyboard navigation
* Visible focus states
* Sufficient color contrast

---

# Code Quality

Requirements:

* Clean architecture
* Reusable Blade components
* Maintainable Tailwind classes
* No duplicated markup
* Mobile-first design
* Strong typing where possible

The codebase should reflect the quality expected from an experienced Laravel developer.

---

# Final Objective

The website should immediately communicate:

* Experienced PHP developer
* Laravel and Symfony specialist
* Strong backend expertise
* Clean architecture mindset
* Professional experience
* Ability to deliver real business value

The final result should feel like a premium SaaS product website built by an experienced engineer.
