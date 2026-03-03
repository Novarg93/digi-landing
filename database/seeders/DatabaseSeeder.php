<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\LegalPage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin user
        User::updateOrCreate(
            ['email' => 'admin@admin.admin'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('1234567890'),
                'email_verified_at' => now(),
            ]
        );

        // Privacy Policy
        LegalPage::updateOrCreate(
            ['code' => 'privacy'],
            [
                'title' => 'Privacy Policy',
                'content' => <<<HTML
<h2>Privacy Policy</h2>
<p>This Privacy Policy describes how Talisman-Pay collects, uses, and protects your information when you use our services.</p>

<h3>Information We Collect</h3>
<ul>
<li>Contact details such as name and email address</li>
<li>Business information provided during onboarding</li>
<li>Technical data such as IP address and browser type</li>
</ul>

<h3>How We Use Information</h3>
<p>We use your information to provide and improve our services, process requests, and comply with legal obligations.</p>

<h3>Data Protection</h3>
<p>We implement appropriate security measures to protect your data against unauthorized access or disclosure.</p>

<p>If you have any questions regarding this Privacy Policy, please contact us.</p>
HTML,
                'is_active' => true,
                'sort' => 10,
            ]
        );

        // Terms and Conditions
        LegalPage::updateOrCreate(
            ['code' => 'terms'],
            [
                'title' => 'Terms and Conditions',
                'content' => <<<HTML
<h2>Terms and Conditions</h2>
<p>These Terms and Conditions govern your use of the Talisman-Pay platform and services.</p>

<h3>Use of Services</h3>
<p>You agree to use our services in compliance with all applicable laws and regulations.</p>

<h3>Account Responsibility</h3>
<p>You are responsible for maintaining the confidentiality of your account credentials.</p>

<h3>Limitation of Liability</h3>
<p>Talisman-Pay shall not be liable for indirect or consequential damages arising from the use of our services.</p>

<h3>Changes to Terms</h3>
<p>We reserve the right to modify these terms at any time. Continued use of the service constitutes acceptance of the updated terms.</p>
HTML,
                'is_active' => true,
                'sort' => 20,
            ]
        );
    }
}