import type { ComputedRef, Ref } from 'vue'
import { computed, ref } from 'vue'

export type Appearance = 'light'
export type ResolvedAppearance = 'light'

export type UseAppearanceReturn = {
    appearance: Ref<Appearance>
    resolvedAppearance: ComputedRef<ResolvedAppearance>
    updateAppearance: (value: Appearance) => void
}

export function updateTheme(): void {
    if (typeof document === 'undefined') return

   
    document.documentElement.classList.remove('dark')
}

export function initializeTheme(): void {
    updateTheme()
}

const appearance = ref<Appearance>('light')

export function useAppearance(): UseAppearanceReturn {
    const resolvedAppearance = computed<ResolvedAppearance>(() => 'light')

    function updateAppearance(): void {
        
        updateTheme()
    }

    return {
        appearance,
        resolvedAppearance,
        updateAppearance,
    }
}