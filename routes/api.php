<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_middleware')
])->group(function () {
    Route::get('/health', function () {
        try {
            // Cek koneksi database
            DB::connection()->getPdo();
            
            return response()->json([
                'status' => 'ok',
                'message' => 'Application is healthy',
                'timestamp' => now()->toIso8601String(),
                'environment' => config('app.env'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage(),
                'timestamp' => now()->toIso8601String(),
            ], 500);
        }
    });