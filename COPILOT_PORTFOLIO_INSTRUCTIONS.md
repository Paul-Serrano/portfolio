# Portfolio Website - Copilot Instructions

## Project Goal

Build a premium single-page portfolio website for a Backend Developer specialized in PHP, Laravel, and Symfony.

The website should look like a modern SaaS landing page rather than a traditional CV.

Target audience:

* Recruiters
* Engineering Managers
* CTOs
* Potential clients

The website must clearly communicate technical expertise, professional experience, project impact, and software engineering mindset.

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

Primary content source:

```php
config/portfolio.php
```

The application should be fully content-driven through configuration.

## Portfolio Data Architecture

Use a single source of truth:

```php
return [
    'profile' => [],
    'experiences' => [],
    'projects' => [],
    'case_studies' => [],
    'skills' => [],
    'statistics' => [],
    'social_links' => [],
];
```

All website content must come from this configuration file.

Avoid hardcoded content inside Blade templates.

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

# Responsive Design

Responsive design is a first-class requirement.

The website must work perfectly on:

* Mobile
* Tablet
* Desktop
* Large desktop screens

## Mobile First Approach

Design all layouts mobile-first.

Breakpoints:

* Mobile (< 768px)
* Tablet (768px - 1024px)
* Desktop (> 1024px)
* Large Desktop (> 1440px)

## Mobile Requirements

* Hamburger navigation
* Touch-friendly buttons
* Optimized typography
* Single-column layouts where appropriate
* Responsive cards
* Optimized timeline display

## Tablet Requirements

* Balanced content density
* Responsive grids
* Improved spacing

## Desktop Requirements

* Premium SaaS experience
* Multi-column layouts
* Rich visual hierarchy

Every component must be responsive.

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

# Website Structure

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

Sticky navigation bar.

Menu items:

* About
* Experience
* Projects
* Skills
* Contact

Desktop:

* Horizontal menu

Mobile:

* Hamburger menu

Features:

* Smooth scrolling
* Active section highlighting
* Sticky navigation

---

# Hero Section

Full viewport height.

## Headline

Backend Developer specialized in Laravel & Symfony

## Subtitle

I build scalable, maintainable and business-oriented web applications.

## Call To Actions

Primary button:

View Projects

Secondary button:

Download Resume

## Content

Display:

* Name
* Job title
* Short introduction

Include:

* Developer-inspired visual
* Terminal-inspired component
* Abstract code pattern

Avoid stock photos.

---

# About Section

Purpose:

Introduce the developer.

Topics to highlight:

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

* Two columns on desktop
* Single column on mobile

---

# Experience Section

Display a professional timeline.

Each experience contains:

* Company
* Role
* Duration
* Description
* Technologies
* Key achievements

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
* Data processing

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

Backend development education and professional retraining.

---

# Featured Projects

Display both professional and personal projects.

The goal is to demonstrate:

* Real-world experience
* Technical expertise
* Product ownership
* Problem solving
* Modern development practices

Display projects as responsive cards.

Each project card contains:

* Title
* Description
* Technologies
* Key challenge
* Outcome
* GitHub link (if available)
* Live demo link (if available)

---

## Professional Project

### Service Vin

Internal business application.

Highlights:

* Stripe integration
* FedEx integration
* Business process automation
* PostgreSQL
* Laravel architecture

---

## Personal Project

### Akkezxla CDM 2026

Repository:

https://github.com/Paul-Serrano/akkezxla-cdm-2026

Live Demo:

https://akkezxla-cdm-2026.onrender.com/

Description:

A Laravel web application focused on FIFA World Cup 2026 predictions and competition tracking.

Responsibilities:

* Product design
* Backend development
* Frontend integration
* Docker setup
* Deployment
* Hosting

Technologies:

* Laravel
* PHP
* PostgreSQL
* Docker
* Tailwind CSS
* Render

Highlights:

* End-to-end ownership
* Production deployment
* Modern Laravel architecture
* Cloud hosting

---

# Case Studies

This section is critical.

Each case study follows this structure:

## Problem

Describe the business challenge.

## Solution

Explain the implemented solution.

## Architecture

Describe technical decisions.

## Result

Present outcomes and impact.

---

## Case Study: Service Vin

Topics:

* Stripe integration
* FedEx integration
* Large data imports
* Business automation

Goal:

Demonstrate business-oriented software development.

---

## Case Study: Reflectiv

Topics:

* Symfony architecture
* Prestashop customization
* Hexagonal architecture
* Maintainability

Goal:

Demonstrate architectural thinking.

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

Display as modern badges or chips.

---

# Statistics Section

Display metrics such as:

* 4+ Years Experience
* 10+ Projects Delivered
* Laravel Specialist
* Freelance & Agency Experience

Use subtle animated counters.

Avoid excessive animations.

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

Requirements:

* No database
* Email sending only

---

# Components

Create reusable Blade components for:

* Section Container
* Section Title
* CTA Button
* Timeline Item
* Experience Card
* Project Card
* Skill Badge
* Statistic Card

Components should be reusable and maintainable.

---

# Animations

Use subtle animations only.

Examples:

* Fade-in on scroll
* Smooth scrolling
* Card hover effects
* Timeline reveal effects

Avoid excessive motion.

The website must remain professional.

---

# Performance Requirements

Target Lighthouse score:

95+

Requirements:

* Optimized images
* Lazy loading
* Minimal JavaScript
* Server-side rendering
* Responsive assets

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
* Sufficient contrast ratios

---

# Code Quality

Requirements:

* Clean architecture
* Reusable Blade components
* Mobile-first design
* Maintainable Tailwind structure
* No duplicated markup
* Strong typing where possible

The codebase should reflect the quality expected from an experienced Laravel developer.

---

# Professional Positioning

The website should position Paul Serrano as:

* Backend Developer
* Laravel Specialist
* Symfony Developer
* API Integration Expert
* Docker Practitioner
* Freelance Consultant
* Software Engineer with an Architecture Mindset

---

# Final Objective

A recruiter should understand within 30 seconds that:

* This developer has real professional experience
* He can build and maintain production applications
* He understands architecture and business requirements
* He is comfortable with Laravel and Symfony ecosystems
* He can work independently or within a team
* He delivers maintainable software that creates business value

The final result should feel like a premium SaaS product website built by an experienced engineer.
