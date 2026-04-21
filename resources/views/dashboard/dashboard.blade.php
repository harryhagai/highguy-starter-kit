@extends('layouts.highguyDashboardLayout')

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4 dashboard-page">
    <div class="row g-3 g-xl-4 mb-4">
        @foreach ($stats as $stat)
            <div class="col-12 col-sm-6 col-xxl-3">
                <article class="dashboard-stat-card dashboard-stat-card--{{ $stat['tone'] }}">
                    <div class="dashboard-stat-card__icon">
                        <i class="bi {{ $stat['icon'] }}"></i>
                    </div>
                    <div>
                        <span class="dashboard-stat-card__label">{{ $stat['label'] }}</span>
                        <h2 class="dashboard-stat-card__value">{{ is_numeric($stat['value']) ? number_format($stat['value']) : $stat['value'] }}</h2>
                    </div>
                </article>
            </div>
        @endforeach
    </div>

    <div class="row g-3 g-xl-4 mb-4">
        <div class="col-12">
            <section class="dashboard-panel h-100">
                <div class="dashboard-panel__header">
                    <div>
                        <span class="dashboard-panel__eyebrow">Quick Summary</span>
                        <h3 class="dashboard-panel__title">System Overview</h3>
                    </div>
                </div>

                <div class="row g-3">
                    @foreach ($summaryTiles as $tile)
                        <div class="col-12 col-sm-6 col-md-3">
                            <article class="dashboard-summary-tile">
                                <div class="dashboard-summary-tile__icon" style="flex-shrink: 0;">
                                    <i class="bi {{ $tile['icon'] }}"></i>
                                </div>
                                <div>
                                    <span class="dashboard-summary-tile__label">{{ $tile['label'] }}</span>
                                    <div class="dashboard-summary-tile__value">{{ $tile['value'] }}</div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>

    <div class="row g-3 g-xl-4">
        <div class="col-lg-8">
            <section class="dashboard-panel h-100 p-5 text-center">
                 <div class="py-5">
                    <x-laravel-logo class="mb-4 dashboard-welcome-logo" />
                    <h2 class="fw-semibold dashboard-welcome-title">Welcome to your new Dashboard</h2>
                    <p class="text-muted mx-auto mb-4" style="max-width: 500px;">
                        This is the HighGuy Starter Kit dashboard. You can now start adding your own modules, charts, and data tables here.
                    </p>
                    <div class="d-flex justify-content-center gap-2">
                        <button class="btn btn-primary px-4">Documentation</button>
                        <button class="btn btn-outline-secondary px-4">System Settings</button>
                    </div>
                 </div>
            </section>
        </div>
        <div class="col-lg-4">
            <section class="dashboard-panel h-100">
                 <h4 class="fw-semibold mb-4 dashboard-activity-title">Recent Activity</h4>
                 <div class="list-group list-group-flush">
                    <div class="list-group-item px-0 border-0 mb-3">
                        <div class="d-flex gap-3">
                            <div class="bg-primary bg-opacity-10 text-primary p-2 rounded-3 h-100">
                                <i class="bi bi-person-plus"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">New user registered</h6>
                                <small class="text-muted">2 minutes ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item px-0 border-0 mb-3">
                        <div class="d-flex gap-3">
                            <div class="bg-success bg-opacity-10 text-success p-2 rounded-3 h-100">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Security scan completed</h6>
                                <small class="text-muted">1 hour ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item px-0 border-0">
                        <div class="d-flex gap-3">
                            <div class="bg-info bg-opacity-10 text-info p-2 rounded-3 h-100">
                                <i class="bi bi-cloud-upload"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">System backup successful</h6>
                                <small class="text-muted">3 hours ago</small>
                            </div>
                        </div>
                    </div>
                 </div>
            </section>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .dashboard-page {
        color: var(--color-dark-800);
        font-size: 0.95rem;
    }

    .dashboard-stat-card,
    .dashboard-panel,
    .dashboard-summary-tile {
        background: var(--color-white);
        border: 1px solid rgba(var(--color-dark-800-rgb), 0.1);
        box-shadow: 0 16px 40px rgba(var(--color-dark-900-rgb), 0.07);
    }

    .dashboard-stat-card,
    .dashboard-summary-tile {
        border-radius: 24px;
    }

    .dashboard-panel {
        border-radius: 28px;
        padding: 1.35rem;
    }

    .dashboard-stat-card {
        display: flex;
        align-items: center;
        gap: 1rem;
        min-height: 124px;
        padding: 1.25rem 1.35rem;
        overflow: hidden;
        position: relative;
    }

    .dashboard-stat-card--blue {
        color: var(--color-primary-600);
        background: linear-gradient(180deg, rgba(var(--color-primary-500-rgb), 0.1), var(--color-white));
    }

    .dashboard-stat-card--slate {
        color: var(--color-slate-600);
        background: linear-gradient(180deg, rgba(var(--color-dark-800-rgb), 0.08), var(--color-white));
    }

    .dashboard-stat-card--teal {
        color: var(--color-success-700);
        background: linear-gradient(180deg, rgba(var(--color-success-500-rgb), 0.1), var(--color-white));
    }

    .dashboard-stat-card--amber {
        color: var(--color-warning-700);
        background: linear-gradient(180deg, rgba(var(--color-warning-500-rgb), 0.12), var(--color-white));
    }

    .dashboard-stat-card__icon,
    .dashboard-summary-tile__icon {
        width: 56px;
        height: 56px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.76);
        border: 1px solid rgba(var(--color-dark-800-rgb), 0.08);
        font-size: 1.35rem;
        flex-shrink: 0;
    }

    .dashboard-stat-card__label,
    .dashboard-summary-tile__label,
    .dashboard-panel__eyebrow {
        display: block;
        font-size: 0.72rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--color-slate-500);
    }

    .dashboard-stat-card__value {
        margin: 0.25rem 0 0;
        font-size: clamp(1.35rem, 1.8vw, 1.75rem);
        color: var(--color-dark-800);
    }

    .dashboard-panel__header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .dashboard-panel__title {
        margin: 0.25rem 0 0;
        font-size: clamp(1rem, 1.2vw, 1.15rem);
        font-weight: 700;
        color: var(--color-dark-800);
    }

    .dashboard-summary-tile {
        display: flex;
        align-items: center;
        gap: 0.95rem;
        padding: 1.5rem;
        height: 100%;
    }

    .dashboard-summary-tile__value {
        font-size: clamp(1.15rem, 1.4vw, 1.35rem);
        font-weight: 700;
        color: var(--color-dark-800);
    }

    .dashboard-welcome-logo {
        width: 80px;
        color: var(--color-danger-500);
    }

    .dashboard-welcome-title {
        font-size: clamp(1.2rem, 1.8vw, 1.55rem);
        line-height: 1.3;
        color: var(--color-dark-800);
    }

    .dashboard-activity-title {
        font-size: clamp(1rem, 1.4vw, 1.2rem);
        line-height: 1.3;
        color: var(--color-dark-800);
    }

    @media (max-width: 768px) {
        .dashboard-panel {
            border-radius: 22px;
            padding: 1rem;
        }

        .dashboard-summary-tile {
            padding: 1rem;
        }
    }
</style>
@endpush
