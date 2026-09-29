<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * A bottom sheet of actions. It starts open so the screen can be captured
 * without any interaction — tap "Show actions" to bring it back.
 */
class BottomSheetScreen extends ShowcaseScreen
{
    public bool $showSheet = true;

    public function openSheet(): void
    {
        $this->showSheet = true;
    }

    /** Called by the row buttons and when the sheet is swiped away. */
    public function closeSheet(): void
    {
        $this->showSheet = false;
    }

    protected function key(): string
    {
        return 'bottom-sheet';
    }
}
