import os
from fastapi import FastAPI, Depends, HTTPException
from fastapi.security import HTTPBearer, HTTPAuthorizationCredentials
from jose import jwt

app = FastAPI(title="Executable Backend Demo")

# --- Sécurité ---
security = HTTPBearer()

SECRET_KEY = os.getenv("JWT_SECRET", "demo-secret")
ALGORITHM = "HS256"

def decode_token(token: str):
    try:
        return jwt.decode(token, SECRET_KEY, algorithms=[ALGORITHM])
    except Exception:
        return None

# --- Auth ---
@app.post("/auth/login")
def login():
    """
    Demo login endpoint.
    Returns a JWT token for demonstration purposes.
    """
    token = jwt.encode(
        {"user_id": 1, "tenant_id": 42},
        SECRET_KEY,
        algorithm=ALGORITHM
    )
    return {
        "access_token": token,
        "token_type": "bearer"
    }

# --- Endpoints protégés ---
@app.get("/me")
def me(credentials: HTTPAuthorizationCredentials = Depends(security)):
    token = credentials.credentials
    user = decode_token(token)

    if not user:
        raise HTTPException(status_code=401, detail="Invalid token")

    return user

@app.get("/tenants/{tenant_id}")
def get_tenant(
    tenant_id: int,
    credentials: HTTPAuthorizationCredentials = Depends(security)
):
    token = credentials.credentials
    user = decode_token(token)

    if not user:
        raise HTTPException(status_code=401, detail="Invalid token")

    return {
        "tenant_id": tenant_id,
        "name": f"Tenant #{tenant_id}",
        "status": "active"
    }
